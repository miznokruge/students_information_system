<?php
$list = array("chart", "dashboard", "elements", "form", "invoice", "jquery", "popup", "login", "signup", "faq", "pricing", "gallery", "reports", "account", "error");
$menu['master'] = array('customers', 'suppliers', 'products', 'units', 'salesmen', 'divider', 'banks', 'currencies', 'taxes');
$menu['reports'] = array('customers', 'suppliers', 'divider', 'products', 'units', 'salesmen', 'banks', 'currencies', 'taxes');
$menu['sales'] = array(array('l' => 'New Transaction', 'c' => 'salesorders', 'a' => 'transaksi'), array('l' => 'On Hold', 'a' => 'onhold'));
?>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="icon-cog"></i>
            </button>
            <?php echo $this->Html->link($AppConfig['AppName'], '/ ', array("class" => "navbar-brand")); ?>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-money"></i>
                        Sales
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        foreach ($menu['sales'] as $lr) {
                            if ($lr['l'] == 'divider') {
                                echo '<li class = "' . $lr['l'] . '"></li>';
                            } else {
                                if (isset($lr['c']) && isset($lr['a'])) {
                                    $red = array('controller' => $lr['c'], 'action' => $lr['a']);
                                }
                                if (!isset($lr['c']) && isset($lr['a'])) {
                                    $red = array('controller' => 'salesorders', 'action' => $lr['a']);
                                }
                                if (!isset($lr['a']) && isset($lr['c'])) {
                                    $red = array('action' => $lr['c']);
                                }
                                echo '<li>' .
                                $this->Html->link(__('<span class = "shortcut-label">' . ucwords($lr['l']) . '</span>'), $red, array('escape' => false, 'class' => 'shortcut')) .
                                '</li>';
                            }
                        }
                        ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-bar-chart"></i>
                        Reports
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        foreach ($menu['repor ts'] as $lr) {
                            if ($lr == 'divider') {
                                echo '<li class = "' . $lr . '"></li>';
                            } else {
                                echo '<li>' .
                                $this->Html->link(__('<span class = "shortcut-label">' . ucwords($lr) . '</span>'), array('controller' => $lr), array('escape' => false, 'class' => 'shortcut')) .
                                '</li>';
                            }
                        }
                        ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-th-list"></i>
                        Master Data
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        foreach ($menu['master'] as $mm) {
                            if ($mm == 'divider') {
                                echo '<li class = "' . $mm . '"></li>';
                            } else {
                                echo '<li>' .
                                $this->Html->link(__('<span class = "shortcut-label">' . ucwords($mm) . '</span>'), array('controller' => $mm), array('escape' => false, 'class' => 'shortcut')) .
                                '</li>';
                            }
                        }
                        ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-cog"></i>
                        Settings
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="account.html">Account Settings</a></li>
                        <li><a href="javascript:;">Privacy Settings</a></li>
                        <li><?php echo $this->Html->link(__('Application Settings'), array('controller' => 'app_configs')); ?></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">Help</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user"></i>
                        Rod Howard
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:;">My Profile</a></li>
                        <li><a href="javascript:;">My Groups</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">Logout</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-refresh"></i>
                        Pages
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        foreach ($list as $l) {
                            if ($l === 'divider') {
                                echo '<li class = "' . $l . '"></li>';
                            } else {
                                echo '<li>' .
                                $this->Html->link(__('<span class = "shortcut-label">' . ucwords($l) . '</span>'), array('controller' => 'pages', 'action' => $l), array('escape' => false, 'class' => 'shortcut')) .
                                '</li>                ';
                            }
                        }
                        ?>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control input-sm search-query" placeholder="Search">
                </div>
            </form>
        </div><!-- /.navbar-collapse -->
    </div> <!-- /.container -->
</nav>