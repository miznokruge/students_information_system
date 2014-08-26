//
// Namespace - Module Pattern.
//
var JQD = (function($, window, document, undefined) {
  // Expose innards of JQD.
  return {
    go: function() {
      for (var i in JQD.init) {
        JQD.init[i]();
      }
    },
    init: {
      frame_breaker: function() {
        if (window.location !== window.top.location) {
          window.top.location = window.location;
        }
      },
      //
      // Initialize the clock.
      //
      clock: function() {
        var clock = $('#clock');

        if (!clock.length) {
          return;
        }

        // Date variables.
        var date_obj = new Date();
        var hour = date_obj.getHours();
        var minute = date_obj.getMinutes();
        var day = date_obj.getDate();
        var year = date_obj.getFullYear();
        var suffix = 'AM';

        // Array for weekday.
        var weekday = [
          'Sunday',
          'Monday',
          'Tuesday',
          'Wednesday',
          'Thursday',
          'Friday',
          'Saturday'
        ];

        // Array for month.
        var month = [
          'January',
          'February',
          'March',
          'April',
          'May',
          'June',
          'July',
          'August',
          'September',
          'October',
          'November',
          'December'
        ];

        // Assign weekday, month, date, year.
        weekday = weekday[date_obj.getDay()];
        month = month[date_obj.getMonth()];

        // AM or PM?
        if (hour >= 12) {
          suffix = 'PM';
        }

        // Convert to 12-hour.
        if (hour > 12) {
          hour = hour - 12;
        }
        else if (hour === 0) {
          // Display 12:XX instead of 0:XX.
          hour = 12;
        }

        // Leading zero, if needed.
        if (minute < 10) {
          minute = '0' + minute;
        }

        // Build two HTML strings.
        var clock_time = weekday + ' ' + hour + ':' + minute + ' ' + suffix;
        var clock_date = month + ' ' + day + ', ' + year;

        // Shove in the HTML.
        clock.html(clock_time).attr('title', clock_date);

        // Update every 60 seconds.
        setTimeout(JQD.init.clock, 60000);
      },
      //
      // Initialize the desktop.
      //
      desktop: function() {
        // Alias to document.
        var d = $(document);

        // Cancel mousedown.
        d.mousedown(function(ev) {
          var tags = ['a', 'button', 'input', 'select', 'textarea', 'tr','form'];
          //var tags = ['tr'];

          if (!$(ev.target).closest(tags).length) {
            JQD.util.clear_active();
            ev.preventDefault();
            ev.stopPropagation();
          }
        });

        // Cancel right-click.
        d.on('contextmenu', function() {
          //return false;
        });

        // Relative or remote links?
        d.on('click', 'a', function(ev) {
          var url = $(this).attr('href');
          this.blur();

          if (url.match(/^#/)) {
            ev.preventDefault();
            ev.stopPropagation();
          }
          else {
            //$(this).attr('target', '_blank');
          }
        });

        // Make top menus active.
        d.on('click', 'a.menu_trigger', function() {
          if ($(this).next('ul.menu').is(':hidden')) {
            JQD.util.clear_active();
            $(this).addClass('active').next('ul.menu').show(100);
          }
          else {
            JQD.util.clear_active();
          }
        });


        // Make top menus active.
/*        d.on('click', '#start_button', function() {
          if ($('#start_window').is(':hidden')) {
            $(this).addClass('active');
			$('#start_window').show();
            JQD.util.clear_active();
          }
          else {
            JQD.util.clear_active();
			$('#start_window').hide();
          }
        });
*/
        // Make top menus active.
        /*d.on('click', 'a#start_button', function() {
			var s_window=$('#start_window');
          if (s_window.is(':hidden')) {
            JQD.util.clear_active();
            $(this).addClass('active');
			s_window.show();
          }
          else {
            $('#start_window').hide(400);
          }
        });*/
		
		
        // Transfer focus, if already open.
        d.on('mouseenter', 'a.menu_trigger', function() {
          if ($('ul.menu').is(':visible')) {
            JQD.util.clear_active();
            $(this).addClass('active').next('ul.menu').show(100);
          }
        });

        // Cancel single-click.
        //d.on('mousedown', 'a.icon', function() {
          // Highlight the icon.
          //JQD.util.clear_active();
          //$(this).addClass('active');
       // });

        // Respond to double-click.
        d.on('dblclick', 'a.icon', function() {
			  // Get the link's target.
			  var x = $(this).attr('href');
			  var z = $(this).attr('href').replace('#icon_dock_','');
			  var y = $(x).find('a').attr('href');
	
			  // Show the taskbar button.
			  if ($(x).is(':hidden')) {
				$(x).remove().appendTo('#dock');
				$(x).show(1000);
			  }
	
			  // Bring window to front.
			  JQD.util.window_flat();
			  $(y).addClass('window_stack').show(500);
			  $('#window_'+z).show(500);
			  //alert(z);
			  
        });

        // Make icons draggable.
        d.on('mouseenter', 'a.icon', function() {
          $(this).off('mouseenter').draggable({
            revert: true,
            containment: 'parent'
          });
        });

        // Taskbar buttons.
        d.on('click', '#bar_bottom li a', function() {
          // Get the link's target.
          var x = $($(this).attr('href'));

          // Hide, if visible.
          if (x.is(':visible')) {
            x.hide(500);
          }
          else {
            // Bring window to front.
            JQD.util.window_flat();
            x.show().addClass('window_stack');
          }
        });

        // Focus active window.
        d.on('mousedown', 'div.window', function() {
          // Bring window to front.
          JQD.util.window_flat();
          $(this).addClass('window_stack');
        });

        // Make windows draggable.
        d.on('mouseenter', 'div.window', function() {
          $(this).off('mouseenter').draggable({
            // Confine to desktop.
            // Movable via top bar only.
            cancel: 'a',
            containment: 'parent',
            handle: 'div.window_top'
          }).resizable({
            containment: 'parent',
            minWidth: 400,
            minHeight: 200
          });
        });

        // Double-click top bar to resize, ala Windows OS.
        
		//d.on('dblclick', 'div.window_top', function() {
         // JQD.util.window_resize(this);
        //});

        // Double click top bar icon to close, ala Windows OS.
        d.on('dblclick', 'div.window_top img', function() {
          // Traverse to the close button, and hide its taskbar button.
          $($(this).closest('div.window_top').find('a.window_close').attr('href')).hide('slow');

          // Close the window itself.
          $(this).closest('div.window').hide(500);

          // Stop propagation to window's top bar.
          return false;
        });

        // Minimize the window.
        d.on('click', 'a.window_min', function() {
          $(this).closest('div.window').hide('scale',500);
        });

        // Maximize or restore the window.
        d.on('click', 'a.window_resize', function() {
          JQD.util.window_resize(this);
        });

        // Close the window.
        d.on('click', 'a.window_close', function() {
          var icon_dock=$(this).attr('href');
		  //alert(icon_dock);
          $(this).closest('div.window').hide(500);
		  	 $(icon_dock).hide('slow');
		  
        });

        // Show desktop button, ala Windows OS.
        d.on('mousedown', '#show_desktop', function() {
          // If any windows are visible, hide all.
			$('#start_window').hide(500);
          if ($('div.window:visible').length) {
            $('div.window').hide(500);
          }
          else {
            // Otherwise, reveal hidden windows that are open.
            $('#dock li:visible a').each(function() {
              $($(this).attr('href')).show(500);
            });
			
			$('div.window').show(500);
			
			
			
          }
        });

        $('table.data').each(function() {
          // Add zebra striping, ala Mac OS X.
          $(this).find('tbody tr:odd').addClass('zebra');
        });

        d.on('mousedown', 'table.data tr', function() {
          // Clear active state.
          JQD.util.clear_active();

          // Highlight row, ala Mac OS X.
          $(this).closest('tr').addClass('active');
        });
      },
      wallpaper: function() {
        // Add wallpaper last, to prevent blocking.
        if ($('#desktop').length) {
			/*setTimeout(function(){
				$.get("_ajax/wallpaper.php",function(data){
					//$('body').prepend('<img id="wallpaper" class="abs" src="../gfx/bg/'+data+'.jpg" />');
				});
			}, 500);*/
          
        }
      }
    },
    util: {
      //
      // Clear active states, hide menus.
      //
      clear_active: function() {
        $('a.active, tr.active').removeClass('active');
        $('ul.menu').hide();
      },
      //
      // Zero out window z-index.
      //
      window_flat: function() {
        $('div.window').removeClass('window_stack');
      },
      //
      // Resize modal window.
      //
      window_resize: function(el) {
        // Nearest parent window.
        var win = $(el).closest('div.window');

        // Is it maximized already?
        if (win.hasClass('window_full')) {
          // Restore window position.
		  var act='';
		  $.get("/_ajax/view.php",{act:act},function(data){
			  if(data=='ok'){
				  win.removeClass('window_full').css({
					'top': win.attr('data-t'),
					'left': win.attr('data-l'),
					'right': win.attr('data-r'),
					'bottom': win.attr('data-b'),
					'width': win.attr('data-w'),
					'height': win.attr('data-h')
				  }).center();
			  }else{
				  alert(data);
			  }
		  });
        }else {
			
		  var act='window_full';
		  $.get("/_ajax/view.php",{act:act},function(data){
			  if(data=='ok'){
				  
				  win.attr({
					// Save window position.
					'data-t': win.css('top'),
					'data-l': win.css('left'),
					'data-r': win.css('right'),
					'data-b': win.css('bottom'),
					'data-w': win.css('width'),
					'data-h': win.css('height')
				  }).addClass('window_full').css({
					// Maximize dimensions.
					'top': '0',
					'left': '0',
					'right': '0',
					'bottom': '0',
					'width': '100%',
					'height': '100%'
				  });
			  }else{
				  alert(data);
			  }
		  });
			
        }

        // Bring window to front.
        JQD.util.window_flat();
        win.addClass('window_stack');
      }
    }
  };
// Pass in jQuery.
})(jQuery, this, this.document);

//
// Kick things off.
//
jQuery(document).ready(function() {
  JQD.go();
});