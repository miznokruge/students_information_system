<div class="col-md-6 col-xs-12">
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
    <div class="widget stacked">
        <div class="widget-header">
            <i class="icon-file"></i>
            <h3>Content</h3>
        </div> <!-- /widget-header -->
        <div class="widget-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div> <!-- /widget-content -->
    </div> <!-- /widget -->
    <div class="widget stacked widget-table action-table">
        <div class="widget-header">
            <i class="icon-th-list"></i>
            <h3>Table</h3>
        </div> <!-- /widget-header -->
        <div class="widget-content">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Engine</th>
                        <th>Browser</th>
                        <th class="td-actions"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0</td>
                        <td class="td-actions">
                            <a href="javascript:;" class="btn btn-xs btn-primary">
                                <i class="btn-icon-only icon-ok"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.0</td>
                        <td class="td-actions">
                            <a href="javascript:;" class="btn btn-xs btn-primary">
                                <i class="btn-icon-only icon-ok"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.5</td>
                        <td class="td-actions">
                            <a href="javascript:;" class="btn btn-xs btn-primary">
                                <i class="btn-icon-only icon-ok"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.5</td>
                        <td class="td-actions">
                            <a href="javascript:;" class="btn btn-xs btn-primary">
                                <i class="btn-icon-only icon-ok"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.5</td>
                        <td class="td-actions">
                            <a href="javascript:;" class="btn btn-xs btn-primary">
                                <i class="btn-icon-only icon-ok"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.5</td>
                        <td class="td-actions">
                            <a href="javascript:;" class="btn btn-xs btn-primary">
                                <i class="btn-icon-only icon-ok"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> <!-- /widget-content -->
    </div> <!-- /widget -->
</div> <!-- /span6 -->
<div class="col-md-6">
    <div class="widget stacked">
        <div class="widget-header">
            <i class="icon-star"></i>
            <h3>Quick Stats</h3>
        </div> <!-- /widget-header -->
        <div class="widget-content">
            <div class="stats">
                <div class="stat">
                    <span class="stat-value">12,386</span>
                    Site Visits
                </div> <!-- /stat -->
                <div class="stat">
                    <span class="stat-value">9,249</span>
                    Unique Visits
                </div> <!-- /stat -->
                <div class="stat">
                    <span class="stat-value">70%</span>
                    New Visits
                </div> <!-- /stat -->
            </div> <!-- /stats -->
            <div id="chart-stats" class="stats">
                <div class="stat stat-chart">
                    <div id="donut-chart" class="chart-holder"></div> <!-- #donut -->
                </div> <!-- /substat -->
                <div class="stat stat-time">
                    <span class="stat-value">00:28:13</span>
                    Average Time on Site
                </div> <!-- /substat -->
            </div> <!-- /substats -->
        </div> <!-- /widget-content -->
    </div> <!-- /widget -->
    <div class="widget stacked">
        <div class="widget-header">
            <i class="icon-bookmark"></i>
            <h3>Quick Shortcuts</h3>
        </div> <!-- /widget-header -->
        <div class="widget-content">
            <div class="shortcuts">
                <?php echo $this->Html->link(__('<i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Settings</span>'), array('controller' => 'configs'), array('escape' => false, 'class' => 'shortcut')); ?>
                <?php echo $this->Html->link(__('<i class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Products</span>'), array('controller' => 'products'), array('escape' => false, 'class' => 'shortcut')); ?>
                <?php echo $this->Html->link(__('<i class="shortcut-icon icon-signal"></i><span class="shortcut-label">Customers</span>'), array('controller' => 'customers'), array('escape' => false, 'class' => 'shortcut')); ?>
                <?php echo $this->Html->link(__('<i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Suppliers</span>'), array('controller' => 'suppliers'), array('escape' => false, 'class' => 'shortcut')); ?>
                <?php echo $this->Html->link(__('<i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Application Setting</span>'), array('controller' => 'app_configs'), array('escape' => false, 'class' => 'shortcut')); ?>
                <a href="javascript:;" class="shortcut">
                    <i class="shortcut-icon icon-bookmark"></i>
                    <span class="shortcut-label">Bookmarks</span>
                </a>
                <a href="javascript:;" class="shortcut">
                    <i class="shortcut-icon icon-signal"></i>
                    <span class="shortcut-label">Reports</span>
                </a>
                <a href="javascript:;" class="shortcut">
                    <i class="shortcut-icon icon-comment"></i>
                    <span class="shortcut-label">Comments</span>
                </a>
                <a href="javascript:;" class="shortcut">
                    <i class="shortcut-icon icon-user"></i>
                    <span class="shortcut-label">Users</span>
                </a>
                <a href="javascript:;" class="shortcut">
                    <i class="shortcut-icon icon-file"></i>
                    <span class="shortcut-label">Notes</span>
                </a>
                <a href="javascript:;" class="shortcut">
                    <i class="shortcut-icon icon-picture"></i>
                    <span class="shortcut-label">Photos</span>
                </a>
                <a href="javascript:;" class="shortcut">
                    <i class="shortcut-icon icon-tag"></i>
                    <span class="shortcut-label">Tags</span>
                </a>
            </div> <!-- /shortcuts -->
        </div> <!-- /widget-content -->
    </div> <!-- /widget -->
    <div class="widget stacked">
        <div class="widget-header">
            <i class="icon-user"></i>
            <h3>Last Users</h3>
        </div> <!-- /widget-header -->
        <div class="widget-content">
            <ul class="dashboard-list">
                <li>
                    <a href="widgets.html#">
                        <img src="<?php echo $this->webroot; ?>img/avatar.jpg" alt="Lucas" class="avatar">
                    </a>
                    <strong>Name:</strong> <a href="widgets.html#">Łukasz Holeczek</a><br>
                    <strong>Since:</strong> Jul 25, 2012 11:09<br>
                    <strong>Status:</strong> <span class="label label-success">Approved</span>
                </li>
                <li>
                    <a href="widgets.html#">
                        <img src="<?php echo $this->webroot; ?>img/avatar9.jpg" alt="Bill" class="avatar">
                    </a>
                    <strong>Name:</strong> <a href="widgets.html#">Bill Cole</a><br>
                    <strong>Since:</strong> Jul 25, 2012 11:09<br>
                    <strong>Status:</strong> <span class="label label-warning">Pending</span>
                </li>
                <li>
                    <a href="widgets.html#">
                        <img src="<?php echo $this->webroot; ?>img/avatar5.jpg" alt="Jane" class="avatar">
                    </a>
                    <strong>Name:</strong> <a href="widgets.html#">Jane Sanchez</a><br>
                    <strong>Since:</strong> Jul 25, 2012 11:09<br>
                    <strong>Status:</strong> <span class="label label-danger">Banned</span>
                </li>
                <li>
                    <a href="widgets.html#">
                        <img src="<?php echo $this->webroot; ?>img/avatar6.jpg" alt="Kate" class="avatar">
                    </a>
                    <strong>Name:</strong> <a href="widgets.html#">Kate Presley</a><br>
                    <strong>Since:</strong> Jul 25, 2012 11:09<br>
                    <strong>Status:</strong> <span class="label label-info">Updates</span>
                </li>
            </ul>
        </div> <!-- /widget-content -->
    </div> <!-- /widget -->
    <div class="widget stacked">
        <div class="widget-header">
            <i class="icon-ok-circle"></i>
            <h3>To do List</h3>
        </div> <!-- /widget-header -->
        <div class="widget-content">
            <div class="todo">
                <ul class="todo-list ui-sortable">
                    <li>
                        Windows Phone 8 App <span class="label label-important">today</span>
                        <span class="todo-actions">
                            <a href="widgets.html#"><i class="icon-ok"></i></a>
                            <a class="todo-remove" href="widgets.html#"><i class="icon-remove"></i></a>
                        </span>
                    </li>
                    <li>New frontend layout <span class="label label-important">today</span>
                        <span class="todo-actions">
                            <a href="widgets.html#"><i class="icon-ok"></i></a>
                            <a class="todo-remove" href="widgets.html#"><i class="icon-remove"></i></a>
                        </span>
                    </li>
                    <li>Hire developers <span class="label label-warning">tommorow</span>
                        <span class="todo-actions">
                            <a href="widgets.html#"><i class="icon-ok"></i></a>
                            <a class="todo-remove" href="widgets.html#"><i class="icon-remove"></i></a>
                        </span>
                    </li>
                    <li>Windows Phone 8 App <span class="label label-warning">tommorow</span>
                        <span class="todo-actions">
                            <a href="widgets.html#"><i class="icon-ok"></i></a>
                            <a class="todo-remove" href="widgets.html#"><i class="icon-remove"></i></a>
                        </span>
                    </li>
                    <li>New frontend layout <span class="label label-success">this week</span>
                        <span class="todo-actions">
                            <a href="widgets.html#"><i class="icon-ok"></i></a>
                            <a class="todo-remove" href="widgets.html#"><i class="icon-remove"></i></a>
                        </span>
                    </li>
                    <li>Hire developers <span class="label label-success">this week</span>
                        <span class="todo-actions">
                            <a href="widgets.html#"><i class="icon-ok"></i></a>
                            <a class="todo-remove" href="widgets.html#"><i class="icon-remove"></i></a>
                        </span>
                    </li>
                    <li>New frontend layout <span class="label label-info">this month</span>
                        <span class="todo-actions">
                            <a href="widgets.html#"><i class="icon-ok"></i></a>
                            <a class="todo-remove" href="widgets.html#"><i class="icon-remove"></i></a>
                        </span>
                    </li>
                    <li>Hire developers <span class="label label-info">this month</span>
                        <span class="todo-actions">
                            <a href="widgets.html#"><i class="icon-ok"></i></a>
                            <a class="todo-remove" href="widgets.html#"><i class="icon-remove"></i></a>
                        </span>
                    </li>
                </ul>
            </div>
        </div> <!-- /widget-content -->
    </div> <!-- /widget -->
    <div class="widget stacked">
        <div class="widget-header">
            <i class="icon-signal"></i>
            <h3>Weekly Stat</h3>
        </div> <!-- /widget-header -->
        <div class="widget-content">
            <ul class="dashboard-list">
                <li>
                    <a href="widgets.html#">
                        <i class="icon-arrow-up green"></i>
                        <span class="green">92</span>
                        New Comments
                    </a>
                </li>
                <li>
                    <a href="widgets.html#">
                        <i class="icon-arrow-down red"></i>
                        <span class="red">15</span>
                        New Registrations
                    </a>
                </li>
                <li>
                    <a href="widgets.html#">
                        <i class="icon-minus blue"></i>
                        <span class="blue">36</span>
                        New Articles
                    </a>
                </li>
                <li>
                    <a href="widgets.html#">
                        <i class="icon-comment yellow"></i>
                        <span class="yellow">45</span>
                        User reviews
                    </a>
                </li>
                <li>
                    <a href="widgets.html#">
                        <i class="icon-arrow-up green"></i>
                        <span class="green">112</span>
                        New Comments
                    </a>
                </li>
                <li>
                    <a href="widgets.html#">
                        <i class="icon-arrow-down red"></i>
                        <span class="red">31</span>
                        New Registrations
                    </a>
                </li>
                <li>
                    <a href="widgets.html#">
                        <i class="icon-minus blue"></i>
                        <span class="blue">93</span>
                        New Articles
                    </a>
                </li>
                <li>
                    <a href="widgets.html#">
                        <i class="icon-comment yellow"></i>
                        <span class="yellow">254</span>
                        User reviews
                    </a>
                </li>
            </ul>
        </div> <!-- /widget-content -->
    </div> <!-- /widget -->
    <div class="widget stacked">
        <div class="widget-header">
            <i class="icon-signal"></i>
            <h3>Tickets</h3>
        </div> <!-- /widget-header -->
        <div class="widget-content">
            <ul class="tickets">
                <li class="ticket">
                    <a href="widgets.html#">
                        <span class="header">
                            <span class="title">Server unavaible</span>
                            <span class="number">[ #199278 ]</span>
                        </span>
                        <span class="content">
                            <span class="avatar"><img alt="Avatar" src="<?php echo $this->webroot; ?>img/avatar6.jpg"></span>
                            <span class="name">Ashley Tan</span>
                            <span class="priority blue">[ Low priority ]</span>
                            <span class="status">Status: <span class="green">[ Complete ]</span></span>
                            <span class="date">Jul 25, 2012 11:09</span>
                        </span>
                    </a>
                </li>
                <li class="ticket">
                    <a href="widgets.html#">
                        <span class="header">
                            <span class="title">Mobile App Problem</span>
                            <span class="number">[ #199277 ]</span>
                        </span>
                        <span class="content">
                            <span class="avatar"><img alt="Avatar" src="<?php echo $this->webroot; ?>img/avatar7.jpg"></span>
                            <span class="name">Ann Kovalsky</span>
                            <span class="priority yellow">[ Normal priority ]</span>
                            <span class="status">Status: <span class="yellow">[ Pending ]</span></span>
                            <span class="date">Jul 25, 2012 11:09</span>
                        </span>
                    </a>
                </li>
                <li class="ticket">
                    <a href="widgets.html#">
                        <span class="header">
                            <span class="title">PayPal issue</span>
                            <span class="number">[ #199276 ]</span>
                        </span>
                        <span class="content">
                            <span class="avatar"><img alt="Avatar" src="<?php echo $this->webroot; ?>img/avatar8.jpg"></span>
                            <span class="name">Chris Dan</span>
                            <span class="priority red">[ High priority ]</span>
                            <span class="status">Status: <span class="blue">[ In progress ]</span></span>
                            <span class="date">Jul 25, 2012 11:09</span>
                        </span>
                    </a>
                </li>
                <li class="ticket">
                    <a href="widgets.html#">
                        <span class="header">
                            <span class="title">IE7 problem</span>
                            <span class="number">[ #199275 ]</span>
                        </span>
                        <span class="content">
                            <span class="avatar"><img alt="Avatar" src="<?php echo $this->webroot; ?>img/avatar9.jpg"></span>
                            <span class="name">John Grand</span>
                            <span class="priority blue">[ Low priority ]</span>
                            <span class="status">Status: <span class="red">[ Rejected ]</span></span>
                            <span class="date">Jul 25, 2012 11:09</span>
                        </span>
                    </a>
                </li>
                <li class="ticket">
                    <a href="widgets.html#">
                        <span class="header">
                            <span class="title">Server unavaible</span>
                            <span class="number">[ #199274 ]</span>
                        </span>
                        <span class="content">
                            <span class="avatar"><img alt="Avatar" src="<?php echo $this->webroot; ?>img/avatar2.jpg"></span>
                            <span class="name">Agnes Young</span>
                            <span class="priority blue">[ Low priority ]</span>
                            <span class="status">Status: <span class="green">[ Complete ]</span></span>
                            <span class="date">Jul 25, 2012 11:09</span>
                        </span>
                    </a>
                </li>
                <li class="ticket">
                    <a href="widgets.html#">
                        <span class="header">
                            <span class="title">Mobile App Problem</span>
                            <span class="number">[ #199273 ]</span>
                        </span>
                        <span class="content">
                            <span class="avatar"><img alt="Avatar" src="<?php echo $this->webroot; ?>img/avatar3.jpg"></span>
                            <span class="name">Melanie Brown</span>
                            <span class="priority yellow">[ Normal priority ]</span>
                            <span class="status">Status: <span class="yellow">[ Pending ]</span></span>
                            <span class="date">Jul 25, 2012 11:09</span>
                        </span>
                    </a>
                </li>
                <li class="ticket">
                    <a href="widgets.html#">
                        <span class="header">
                            <span class="title">PayPal issue</span>
                            <span class="number">[ #199272 ]</span>
                        </span>
                        <span class="content">
                            <span class="avatar"><img alt="Avatar" src="<?php echo $this->webroot; ?>img/avatar4.jpg"></span>
                            <span class="name">Patricia Doyle</span>
                            <span class="priority red">[ High priority ]</span>
                            <span class="status">Status: <span class="blue">[ In progress ]</span></span>
                            <span class="date">Jul 25, 2012 11:09</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div> <!-- /widget-content -->
    </div> <!-- /widget -->
    <div class="widget stacked">
        <div class="widget-header">
            <i class="icon-signal"></i>
            <h3>Chart</h3>
        </div> <!-- /widget-header -->
        <div class="widget-content">

        </div> <!-- /widget-content -->
    </div> <!-- /widget -->

</div> <!-- /span6 -->
<style>
    #lala{
        margin: 5px auto;
        -moz-border-radius:5px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        margin-bottom: 20px;
    }
    .c-image{
        width:100%;
        height: 300px;
        -moz-border-radius:5px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
    }
</style>
<script>
    $(function() {
        $("#lala").cycle({
            speed: 1000,
            delay: 300,
            fx: 'scrollLeft'
        });

        $(".news-items").cycle(
                {
                    speed: 500,
                    delay: 1000,
                    fx: 'scrollUp'
                });
    });
</script>