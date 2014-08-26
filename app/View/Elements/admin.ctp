<?php
$user = $this->UserAuth->getUser();
$username = $user['User']['username'];
$structure = array(
    'bahasa' => array(
        'u' => 'lang',
        'l' => 'Bahasa',
        'i' => 'bahasa',
        'r' => array(
            'en' => array(
                'u' => 'eng',
                'i' => 'en',
                'l' => 'English'
            ),
            'fre' => array(
                'u' => 'fre',
                'i' => 'fre',
                'l' => 'Francais'
            )
        )
    ),
    'exam' => array(
        'u' => 'exam/',
        'l' => 'exam',
        'i' => 'icon'),
    'stat' => array(
        'u' => 'statistics/',
        'l' => 'Statistics',
        'i' => 'icon'),
    'master-data' => array(
        'u' => '#',
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
                'i' => 'icon-x'),
            'pricing' => array(
                'u' => 'memberships/',
                'l' => 'Pricing',
                'i' => 'icon-x'),
            'faq' => array(
                'u' => 'faqs/',
                'l' => 'FAQ',
                'i' => 'app'))),
    'report' => array(
        'u' => 'reports/',
        'l' => 'Reports',
        'i' => 'icon-book',
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
    'settings' => array(
        'u' => 'configs/',
        'l' => 'Settings',
        'i' => 'icon-cog',
        'r' => array(
            'app-config' => array(
                'u' => 'configs/',
                'l' => 'settings',
                'i' => 'app-config'),
            'User' => array(
                'u' => 'addUser',
                'i' => 'user',
                'l' => 'User',
                'r' => array(
                    'addUser' => array(
                        'u' => 'addUser',
                        'i' => 'addUser',
                        'l' => 'add User'
                    ),
                    'allUsers' => array(
                        'u' => 'allUsers',
                        'i' => 'allUsers',
                        'l' => 'all Users'
                    )
                )
            ),
            'Group' => array(
                'u' => 'group',
                'i' => 'group',
                'l' => 'group',
                'r' => array(
                    'allGroups' => array(
                        'u' => 'allGroups',
                        'i' => 'allGroups',
                        'l' => 'all Groups'
                    ),
                    'addGroup' => array(
                        'u' => 'addGroup',
                        'i' => 'addGroup',
                        'l' => 'add Group'
                    )
                )
            ),
            'permissions' => array(
                'u' => 'permissions',
                'i' => 'permissions',
                'l' => 'permissions'
            ))),
    'pages' => array(
        'u' => 'pages/',
        'l' => 'Pages',
        'i' => 'contact',
        'r' => array(
            'chart' => array(
                'u' => 'pages/chart/',
                'l' => 'chart',
                'i' => 'icon-tag'),
            'inbox' => array(
                'u' => 'pages/inbox/',
                'l' => 'inbox',
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
        'l' => $username,
        'i' => 'icon-user',
        'r' => array(
            'Profile' => array(
                'u' => 'profile',
                'i' => 'icon-user',
                'l' => 'profile',
                'r' => array(
                    'profile' => array(
                        'u' => 'myprofile',
                        'i' => 'profile',
                        'l' => 'My Profile'
                    ),
                    'editprofile' => array(
                        'u' => 'editUser/' . $user['User']['id'],
                        'i' => 'editprofile',
                        'l' => 'edit profile'
                    )
                )
            ),
            'cp' => array(
                'u' => 'changePassword',
                'i' => 'icon-key',
                'l' => 'Change Password'
            ),
            'logout' => array(
                'u' => 'logout/',
                'l' => 'Logout',
                'i' => 'icon-signout'))),
);
?>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <?php echo $this->element('brand') ?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-bell shaded"></i>
                        <label class="badge-important badge"><?php echo count($list_task_unread); ?></label>
                    </a>
                    <ul class="dropdown-menu tasks">
                        <?php foreach ($list_task_unread as $lstask) { ?>
                            <li>
                                <a href="<?php echo $this->webroot; ?>tasks/view/<?php echo $lstask['Task']['id']; ?>">
                                    <i class="icon-pushpin"></i>
                                    <span class="header">
                                        <span class="title"><?php echo $lstask['Task']['name']; ?></span>
                                        <span class="percent"><?php echo date("d M", strtotime($lstask['Task']['deadline_date'])); ?></span>
                                    </span>
                                </a>
                            </li>
                        <?php } ?>



                        <li>
                            <?php echo $this->Html->link(__('View all tasks'), array('controller' => 'tasks', 'action' => 'index'), array('class' => 'dropdown-menu-sub-footer')); ?>
                        </li>
                    </ul>
                </li>
                <li class="dropdown hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Inbox"> <i class="icon-envelope shaded"></i>
                        <?php if (count($list_message_unread) > 0) { ?>
                            <label class="badge badge-warning"><?php echo count($list_message_unread); ?></label>
                        <?php } ?>
                    </a>
                    <?php if (count($list_message_unread) > 0) { ?>
                        <ul class="dropdown-menu messages">
                            <?php foreach ($list_message_unread as $lsmsg) { 
								
								if($lsmsg['Message']['parent_id']==0){
									$id=$lsmsg['Message']['id'];
								}else{
									$id=$lsmsg['Message']['parent_id'];
								}
								
								?>
                                <li>
                                    <a href="<?php echo $this->webroot; ?>messages/view/<?php echo $id; ?>">

                                        <span class="avatar"><img src="<?php echo $this->webroot; ?>img/avatar5.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                <?php echo $lsmsg['Sender']['username']; ?>
                                            </span>
                                            <span class = "time">
                                                <?php
                                                $formatted = date("d M", strtotime($lsmsg['Message']['created']));
                                                if ($formatted == date("d M")) {
                                                    $formatted.=' ' . date("H:i");
                                                } else {
                                                    $formatted.=' ' . date("Y");
                                                }
                                                echo $formatted;
                                                ?>
                                            </span>
                                        </span>
                                        <span class = "message">
                                            <?php echo substr($lsmsg['Message']['content'], 0, 30); ?>
                                        </span>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                            <li>
                                <?php echo $this->Html->link(__('View all messages'), array('controller' => 'messages', 'action' => 'index'), array('class' => 'dropdown-menu-sub-footer')); ?>
                            </li>
                        </ul>
                    <?php } else { ?>
                        <ul class="dropdown-menu messages">
                            <li>
                                <a href="#">No New message</a>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__('View all messages'), array('controller' => 'messages', 'action' => 'index'), array('class' => 'dropdown-menu-sub-footer')); ?>
                            </li>
                        </ul>
                    <?php } ?>
                </li>
                <li class="dropdown hidden-xs">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon icon-warning-sign"></i>
                    </a>
                    <ul class="dropdown-menu notifications">
                        <li>
                            <span class="dropdown-menu-title">You have 11 notifications</span>
                        </li>
                        <?php foreach ($list_notifications as $notification): ?>
                            <li>
                                <a href="index-2.html#">
                                    + <i class="fa fa-user"></i> <span class="message">New user registration</span> <span class="time">1 min</span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <li>
                            <a class="dropdown-menu-sub-footer">View all notifications</a>
                        </li>
                    </ul>
                </li>
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
                                        if ($yy['i'] == 'icon-user') {
                                            echo '<li>'
                                            . '<a href="' . $this->webroot . $yy['u'] . '">'
                                            . '<img class = "nav-avatar" src = "' . $this->webroot . 'img/samples/user.png">'
                                            . '</a>'
                                            . '</li>';
                                        } else {
                                            echo '<li>'
                                            . '<a href="' . $this->webroot . $yy['u'] . '">'
                                            . '<i class="' . $yy['i'] . '"></i> ' . ucwords($yy['l']) . ''
                                            . '</a>'
                                            . '</li>';
                                        }
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
            <!--<form class="navbar-form navbar-right" role="search">
                             <div class="form-group">
                                 <input type="text" class="form-control input-sm search-query" placeholder="Search">
                             </div>
                         </form>-->
        </div><!-- /.navbar-collapse -->
    </div> <!-- /.container -->
</nav>