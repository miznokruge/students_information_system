<?php
$user = $this->UserAuth->getUser();
$username = $user['User']['username'];
$structure = array(
//    'bahasa' => array(
//        'u' => 'lang',
//        'l' => 'Bahasa',
//        'i' => 'bahasa',
//        'r' => array(
//            'en' => array(
//                'u' => 'eng',
//                'i' => 'en',
//                'l' => 'English'
//            ),
//            'fre' => array(
//                'u' => 'fre',
//                'i' => 'fre',
//                'l' => 'Francais'
//            )
//        )
//    ),
    'exam' => array(
        'u' => 'exam/',
        'l' => 'exam',
        'i' => 'icon'),
    'myexam' => array(
        'u' => 'myexam/',
        'l' => 'My exam',
        'i' => 'icon'),
    'categories' => array(
        'u' => 'categories/',
        'l' => 'categories',
        'i' => 'icon-tagx'),
    'faqs' => array(
        'u' => 'faq/',
        'l' => 'FAQ',
        'i' => 'icon-x'),
    'pricing' => array(
        'u' => 'pricing/',
        'l' => 'Pricing',
        'i' => 'icon-x'),
    'users' => array(
        'u' => 'myaccount/',
        'l' => $username,
        'i' => 'icon-user',
        'r' => array(
            'my-account' => array(
                'u' => 'myprofile',
                'l' => 'my profile',
                'i' => 'my-account'),
            'edit_profile' => array(
                'u' => 'update_profile',
                'l' => 'Update profile',
                'i' => 'update_profile'),
            'change-pass' => array(
                'u' => 'changePassword',
                'l' => 'Change Password',
                'i' => 'change'),
            'logout' => array(
                'u' => 'logout/',
                'l' => 'Logout',
                'i' => 'logout'))),
);
?>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <?php echo $this->element('brand');?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Inbox"> <i class="icon-envelope shaded"></i>
                        <?php if (count($list_message_unread) > 0) { ?>
                            <label class="badge badge-warning"><?php echo count($list_message_unread); ?></label>
                        <?php } ?>
                    </a>
                    <?php if (count($list_message_unread) > 0) { ?>
                        <ul class="dropdown-menu messages">
                            <?php foreach ($list_message_unread as $lsmsg) { ?>
                                <li>
                                    <a href="<?php echo $this->webroot; ?>messages/view/<?php echo $lsmsg['Message']['id']; ?>">

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