<?php
$structure = array(
    'tour' => array(
        'u' => 'tour/',
        'l' => 'Start Tour',
        'i' => 'icon-x'),
    'exam' => array(
        'u' => 'exam/',
        'l' => 'exam',
        'i' => 'icon'),
    'myexam' => array(
        'u' => 'myexam/',
        'l' => 'My Exam',
        'i' => 'icon-x'),
    'category' => array(
        'u' => 'categories/',
        'l' => 'Category',
        'i' => 'icon-x'),
    'faqs' => array(
        'u' => 'faq/',
        'l' => 'FAQ',
        'i' => 'icon-x'),
    'pricing' => array(
        'u' => 'pricing/',
        'l' => 'Pricing',
        'i' => 'icon-x'),
//    'additional' => array(
//        'u' => 'faqs/',
//        'l' => 'Additional',
//        'i' => 'icon-x-list',
//        'r' => array(
//            'faq' => array(
//                'u' => 'faqs/',
//                'l' => 'FAQ',
//                'i' => 'app'),
//            'stat' => array(
//                'u' => 'statistics/',
//                'l' => 'Stat',
//                'i' => 'stat'),
//        )),
    'login' => array(
        'u' => 'login/',
        'l' => 'Login',
        'i' => 'icon-user'),
	'register' => array(
        'u' => 'register/',
        'l' => 'register',
        'i' => 'icon-x'),
);
?>
<nav class = "navbar navbar-inverse" role = "navigation">
    <div class = "container">
        <!--Brand and toggle get grouped for better mobile display -->
        <?php echo $this->element('brand');?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php foreach ($structure AS $name => $data) { ?>
                    <li  class="dropdown<?php if ($this->request->params['controller'] == $data['i'] || $this->request->params['action'] == $data['i']) echo ' active'; ?>">
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