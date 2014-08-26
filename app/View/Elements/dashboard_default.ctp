<div class="col-md-6 col-xs-12">
    <div id="lala">
		<?php echo $this->Html->image('slides/a.png', array("class" => "c-image")); ?>
		<?php echo $this->Html->image('slides/b.jpg', array("class" => "c-image")); ?>
		<?php echo $this->Html->image('slides/c.jpg', array("class" => "c-image")); ?>
    </div>
    <div id="slider_pager">
        <a href="#" id="prev"><span>Prev</span></a>
        <a href="#" id="next"><span>Next</span></a>
        <ul id="nav"></ul>
    </div>
    <div class="widget widget-nopad stacked">
        <div class="widget-header">
            <i class="icon-list-alt"></i>
            <h3>Recent News</h3>
        </div> <!-- /widget-header -->
        <div class="widget-content">
            <ul class="news-items">
				<?php foreach ($stat as $s) { ?>
					<li>
						<div class="news-item-detail col-md-8">
							<?php echo $this->Html->link($s['Set']['name'], array('controller' => 'sets', 'action' => 'view', $s['Set']['id']), array('class' => 'news-item-title', 'div' => false)); ?>
							<p class="news-item-preview"><?php echo $s['User']['username']; ?></p>
							<br/>
							<?php
							echo $this->Timeago->inWords($s['Statistic']['time']) . ' ago';
							?>
						</div>
						<div class="news-item-date col-md-4 pull-right">
							<span class="news-item-month">Score</span>
							<span class="news-item-day"><?php echo $s['Statistic']['totalscore']; ?>/<?php echo $s['Set']['passpercent']; ?></span>
							<span class="news-item-month">
								<?php
								if ($s['Statistic']['totalscore'] >= $s['Set']['passpercent']) {
									$res = '<label class="label label-success">Passed</label>';
								} else {
									$res = '<label class="label label-danger">Failed</label>';
								}
								echo $res;
								?>
							</span>
						</div>
					</li>
				<?php } ?>
            </ul>
        </div> <!-- /widget-content -->
    </div> <!-- /widget -->
</div>
<div class="col-md-6">
    <div class="widget">
		<div class="widget-content">
			<h4>Instructor</h4>
			<ul>
				<li>Access QuizStar from work or home</li>
				<li>Create quizzes for students to take online</li>
				<li>Utilize the robust Report tools</li>
				<li>Create multilingual quizzes</li>
				<li>and much more!</li>
			</ul>

			<h4>Student</h4>
			<ul>
				<li>Search for classes online</li>
				<li>Take quizzes</li>
				<li>Review your quiz scores</li>
			</ul>
		</div>
	</div>
	<div class="widget">
		<div class="widget-content">
			<h3>With SuperQuiz you can</h3>
			<ol>
				<li>Manage classes and quizzes</li>
				<li>Attach multimedia files to questions</li>
				<li>Make quizzes in multiple languages</li>
				<li>Access from any Internet-connected computer</li>
				<li>Allow students to complete and review</li>
			</ol>
		</div>
	</div>
</div>
<style>
    #slider_pager{
        text-align:center;
        margin:auto;
        width:556px;
        position: absolute;
        z-index: 20000;
    }
    #slider_pager ul#nav{
        margin-top: -70px;
        float: right;
    }
    #slider_pager ul#nav li{
        list-style: none;
        float:left;
        margin-right: 5px;
        padding:3px 10px;
        -moz-border-radius:15px;
        border-radius: 15px;
        -webkit-border-radius: 15px;
        background: #CCC;
        border:0;
    }

    #slider_pager ul#nav li.activeSlide{
        background: #f00;
        font-weight: bold;
        color:#fff !important;
    }

    #slider_pager a#prev,#slider_pager a#next{
        margin-top:-200px;
        background: #fff;
        padding:5px 10px;
    }
    #slider_pager a#prev{
        float: left;
        -webkit-border-top-right-radius: 5px;
        -webkit-border-bottom-right-radius: 5px;
        -moz-border-radius-topright: 5px;
        -moz-border-radius-bottomright: 5px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }
    #slider_pager a#next{
        float: right;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-bottom-left-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-bottomleft: 5px;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }
    #lala{
        margin: 5px auto;
        -moz-border-radius:5px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        margin-bottom: 20px;
    }
    .c-image{
        width:100%;
        height: 400px;
        -moz-border-radius:5px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
    }
</style>
<script>
	$(function() {
		$('#lala').cycle({
			speed: 1000,
			delay: 300,
			fx: 'fade',
			prev: '#prev',
			next: '#next',
			pager: '#nav',
			pagerAnchorBuilder: pagerFactory
		});
		function pagerFactory(idx, slide) {
			var s = idx > 2 ? ' style="display:none"' : '';
			return '<li' + s + '><a href="#">' + (idx + 1) + '</a></li>';
		}

//		$(".news-items").cycle(
//				{
//					speed: 500,
//					delay: 1000,
//					fx: 'scrollUp'
//				});
	});
</script>