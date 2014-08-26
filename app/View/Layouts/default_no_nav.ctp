<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = $config['title']['v'];
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <?php echo $this->Html->css('font');?>
        <?php
        echo $this->Html->charset();
        echo $this->Html->meta('icon');
        echo $this->Html->css(array('bootstrap-responsive.min', 'bootstrap.min', 'pages/dashboard', 'custom', 'base-admin-3-responsive', 'base-admin-3', 'ui-lightness/jquery-ui-1.10.0.custom.min', 'font-awesome.min'));
        echo $this->Html->script(array('libs/jquery-1.9.1.min', 'libs/jquery-ui-1.10.0.custom.min', 'libs/bootstrap.min', 'plugins/flot/jquery.flot', 'plugins/flot/jquery.flot.pie', 'plugins/flot/jquery.flot.resize', 'Application', 'charts/area', 'charts/donut'));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <?php echo $this->element('header'); ?>
        <div class="main">
            <div class="container">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
                <?php echo $this->element('sql_dump'); ?>
            </div> <!-- /container -->
        </div> <!-- /main -->
        <?php echo $this->element('footer'); ?>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div id="footer-copyright" class="col-md-6">
                        &copy; 2012-<?php echo date("Y"); ?> <?php echo $AppConfig['COMPANY']; ?>.
                    </div> <!-- /span6 -->
                    <div id="footer-terms" class="col-md-6">
                        <?php echo $AppConfig['APPDESC']; ?>
                    </div> <!-- /.span6 -->
                </div> <!-- /row -->
            </div> <!-- /container -->
        </div> <!-- /footer -->
    </body>
</html>
