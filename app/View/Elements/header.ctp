<?php
$structure = array(
    'exam' => array(
        'u' => 'exam/',
        'l' => 'exam',
        'i' => 'icon'),
    'master-data' => array('u' => '#',
        'l' => 'Master Data',
        'i' => 'icon-tag',
        'r' => array(
            'sets' => array(
                'u' => 'sets/',
                'l' => 'Sets',
                'i' => 'icon-tag'),
            'categories' => array(
                'u' => 'categories/',
                'l' => 'categories',
                'i' => 'icon-tag'),
            'questionorder' => array(
                'u' => 'questionorders/',
                'l' => 'questionorder',
                'i' => 'icon-tag'),
            'divider' => array(
                'u' => 'banks/',
                'l' => 'Bank Account',
                'i' => 'icon-tag'),
            'users' => array(
                'u' => 'users/',
                'l' => 'users',
                'i' => 'icon-tag'),
            'logs' => array(
                'u' => 'logs/',
                'l' => 'logs',
                'i' => 'icon-tag'))),
    'appconfigs' => array(
        'u' => 'configs/',
        'l' => 'Settings',
        'i' => 'icon-cog',
        'r' => array(
            'app-config' => array(
                'u' => 'configs/',
                'l' => 'Application Configuration',
                'i' => 'app-config'))),
    'additional' => array(
        'u' => 'faqs/',
        'l' => 'Additional',
        'i' => 'icon-th-list',
        'r' => array(
            'faq' => array(
                'u' => 'faqs/',
                'l' => 'FAQ',
                'i' => 'app'),
            'stat' => array(
                'u' => 'statistics/',
                'l' => 'Stat',
                'i' => 'stat'),
        )),
    'report' => array(
        'u' => 'reports/',
        'l' => 'Reports',
        'i' => 'icon-cog',
        'r' => array(
            'sales' => array(
                'u' => 'reports/sales/',
                'l' => 'Sales',
                'i' => 'xxx',
                'r' => array(
                    'sales_monthly' => array(
                        'u' => 'reports/sales_monthly/',
                        'l' => 'Monthly',
                        'i' => ''
                    ),
                    'sales_weekly' => array(
                        'u' => 'reports/sales_weekly/',
                        'l' => 'Weekly',
                        'i' => ''
                    ),
                    'sales_by_product' => array(
                        'u' => 'reports/sales_by_product/',
                        'l' => 'Sales By Products',
                        'i' => ''
                    )
                )
            ),
            'manajemen' => array(
                'u' => 'manajemen/',
                'l' => 'Manajemen',
                'i' => 'manajemen'))),
    'pages' => array(
        'u' => 'pages/',
        'l' => 'Pages',
        'i' => 'contact',
        'r' => array(
            'chart' => array(
                'u' => 'pages/chart/',
                'l' => 'chart',
                'i' => 'icon-tag'),
            'dashboard' => array(
                'u' => 'pages/dashboard/',
                'l' => 'dashboard',
                'i' => 'icon-tag'),
            'elements' => array(
                'u' => 'pages/elements/',
                'l' => 'elements',
                'i' => 'icon-tag'),
            'form' => array(
                'u' => 'pages/form/',
                'l' => 'form',
                'i' => 'icon-tag'),
            'invoice' => array(
                'u' => 'pages/invoice/',
                'l' => 'invoice',
                'i' => 'icon-tag'),
            'jquery' => array(
                'u' => 'pages/jquery/',
                'l' => 'jquery',
                'i' => 'icon-tag'),
            'popup' => array(
                'u' => 'pages/popup/',
                'l' => 'popup',
                'i' => 'icon-tag'),
            'login' => array(
                'u' => 'pages/login/',
                'l' => 'login',
                'i' => 'icon-tag'),
            'signup' => array(
                'u' => 'pages/signup/',
                'l' => 'signup',
                'i' => 'icon-tag'),
            'faq' => array(
                'u' => 'pages/faq/',
                'l' => 'faq',
                'i' => 'icon-tag'),
            'pricing' => array(
                'u' => 'pages/pricing/',
                'l' => 'pricing',
                'i' => 'icon-tag'),
            'gallery' => array(
                'u' => 'pages/gallery/',
                'l' => 'gallery',
                'i' => 'icon-tag'),
            'reports' => array(
                'u' => 'pages/reports/',
                'l' => 'reports',
                'i' => 'icon-tag'),
            'account' => array(
                'u' => 'pages/account/',
                'l' => 'account',
                'i' => 'icon-tag'),
            'error' => array(
                'u' => 'pages/error/',
                'l' => 'error',
                'i' => 'icon-tag')
        )
    ),
    'users' => array(
        'u' => 'myaccount/',
        'l' => 'myaccount',
        'i' => 'icon-user',
        'r' => array(
            'my-account' => array(
                'u' => 'account/my_account/',
                'l' => 'my account',
                'i' => 'my-account'),
            'change-pass' => array(
                'u' => 'account/change_password/',
                'l' => 'Change Password',
                'i' => 'change'))),
);
?>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="icon-cog"></i>
            </button>
            <?php echo $this->Html->link($config['APPNAME']['v'], '/ ', array("class" => "navbar-brand")); ?>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php foreach ($structure AS $name => $data) { ?>
                    <li  class="dropdown <?php if ($this->request->params['controller'] == $data['i'] || $this->request->params['action'] == $data['i']) echo ' active'; ?>">
                        <?php
                        if (isset($data['r'])) {
                            ?>
                            <a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="<?php echo $data['i']; ?>"></i>
                                <?php echo ucwords($data['l']); ?>
                                <b class="caret"></b>
                            </a>
                            <?php
                            echo '<ul class="dropdown-menu">';
                            foreach ($data['r'] AS $x => $y) {

                                if ($x == 'divider') {
                                    echo '<li class="divider"></li>';
                                } else {
                                    if (isset($y['r'])) {
                                        echo '<li class="dropdown-submenu"><a href="' . $this->webroot . $y['u'] . '" title="' . $y['l'] . '"><i class="' . $y['i'] . '"></i> ' . ucwords($y['l']) . '</a>';
                                    } else {
                                        echo '<li><a href="' . $this->webroot . $y['u'] . '" title="' . $y['l'] . '"><i class="' . $y['i'] . '"></i> ' . ucwords($y['l']) . '</a>';
                                    }
                                }
                                if (isset($y['r'])) {
                                    echo '<ul class="dropdown-menu">';
                                    foreach ($y['r'] AS $xx => $yy) {
                                        echo '<li><a href="' . $this->webroot . $yy['u'] . '"><i class="' . $yy['i'] . '"></i> ' . ucwords($yy['l']) . '</a></li>';
                                    }
                                    echo '</ul>';
                                }
                                echo '</li>';
                            }
                            echo '</ul>';
                        } else {
                            ?>
                            <a href="<?php echo $this->webroot; ?><?php echo $data['u']; ?>">
                                <i class="<?php echo $data['i']; ?>"></i> <?php echo ucwords($data['l']); ?>
                            </a>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
            <!--            <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control input-sm search-query" placeholder="Search">
                            </div>
                        </form>-->
        </div><!-- /.navbar-collapse -->
    </div> <!-- /.container -->
</nav>