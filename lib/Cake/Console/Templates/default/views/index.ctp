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
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class="<?php echo $pluralVar; ?> index row">
    <div class="col-md-10">
        <h3 class="index-title"><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></h3>
        <?php
        echo "<?php echo \$this->Form->create('{$modelClass}',array('type'=>'get','style'=>'margin:5px auto;','action'=>'index'));?>";
        ?>
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="search" placeholder="search" value="<?php echo '<?php echo $search_term;?>'; ?>">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="icon icon-search"></i> Search
                </button>
            </span>
            <span class="input-group-btn" style="margin: auto 5px;">
                <?php echo "<?php echo \$this->Html->link('<i class=\"icon icon-refresh\"></i> View All',array('controller'=>'{$pluralHumanName}','action'=>'index'),array('class'=>'btn btn-default','escape'=>false));?>"; ?>
            </span>
        </div>
        <?php echo '<?php echo $this->Form->end();?>'; ?>
        <table class="table table-striped table-bordered">
            <tr>
                <?php
                $h = 0;
                foreach ($fields as $field):
                    ?>
                    <?php
                    if ($h <= 8) {
                        if ($field != 'deleted') {
                            ?>
                            <th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
                            <?php
                        }
                    }
                    ?>
                    <?php
                    $h++;
                endforeach;
                ?>
                <th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
            </tr>
            <?php
            echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
            echo "\t<tr>\n";
            $i = 0;
            foreach ($fields as $field) {
                if ($i <= 8) {
                    if ($field != 'deleted') {
                        $isKey = false;
                        if (!empty($associations['belongsTo'])) {
                            foreach ($associations['belongsTo'] as $alias => $details) {
                                if ($field === $details['foreignKey']) {
                                    $isKey = true;
                                    echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
                                    break;
                                }
                            }
                        }
                        if ($isKey !== true) {
                            echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
                        }
                    }
                }
                $i++;
            }
            echo "\t\t<td class=\"actions\">\n";
            echo "\t\t<div class=\"btn-group\">
  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
    Action <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\">";
            echo "\t\t\t<li><?php echo \$this->Html->link(__('<i class=\"icon-zoom-in\"></i> View'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('escape' => false, 'class' => 'ui-popover', 'data-container' => 'body', 'data-toggle' => 'popover', 'data-trigger' => 'hover', 'data-placement' => 'top', 'data-content' => 'Click to view the details of this record.', 'title' => '', 'data-original-title' => 'Information')); ?></li>\n";
            echo "\t\t\t<li><?php echo \$this->Html->link(__('<i class=\"icon-edit\"></i> Edit'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('escape' => false, 'class' => 'ui-popover', 'data-container' => 'body', 'data-toggle' => 'popover', 'data-trigger' => 'hover', 'data-placement' => 'top', 'data-content' => 'Click to edit this record.', 'title' => '', 'data-original-title' => 'Information')); ?></li>\n";
            echo "\t\t\t<li><?php echo \$this->Form->postLink(__('<i class=\"icon-trash\"></i> Delete'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('escape' => false, 'class' => 'ui-popover', 'data-container' => 'body', 'data-toggle' => 'popover', 'data-trigger' => 'hover', 'data-placement' => 'top', 'data-content' => 'Click to delete this record.', 'title' => '', 'data-original-title' => 'Information'), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?></li>\n";

            echo "</ul>
</div>";
            echo "\t\t</td>\n";
            echo "\t</tr>\n";
            echo "<?php endforeach; ?>\n";
            ?>
        </table>
        <div class="row">
            <div class="col-md-5 col-lg-offset-1">
                <?php echo '<?php
            echo $this->Paginator->pagination(array(
                "ul" => "pagination"
            ));
            ?>'; ?>
            </div>
            <div class="col-md-6" style="margin-top:30px;">
                <?php echo "<?php
	echo \$this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>"; ?></div>
        </div>
    </div>
    <div class="col-md-2">
        <div style="margin-bottom:10px;">
            <?php echo "<?php echo \$this->Html->link(__('<i class=\"icon icon-ok-sign\"></i> Add New Record'), array('action' => 'add'),array('class'=>'btn btn-block btn-primary','escape'=>false)); ?> </li>\n"; ?>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo "<?php echo __('Actions'); ?>"; ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <ul class="nav nav-list">
                    <li><?php echo "<?php echo \$this->Html->link(__('New " . $singularHumanName . "'), array('action' => 'add')); ?>"; ?></li>
                    <?php
                    $done = array();
                    foreach ($associations as $type => $data) {
                        foreach ($data as $alias => $details) {
                            if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
                                echo "\t\t<li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
                                echo "\t\t<li><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
                                $done[] = $details['controller'];
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-th"></i>
                <h3><?php echo "<?php echo __('Informasi'); ?>"; ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                Sed rhoncus metus vel congue volutpat? Vestibulum laoreet orci consectetur lectus congue blandit? Integer condimentum fringilla libero,
            </div>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-th"></i>
                <h3><?php echo "<?php echo __('Informasi'); ?>"; ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                Donec sit amet tellus euismod, ullamcorper libero eu, aliquam ante. Nullam vitae urna tincidunt lacus posuere ultrices ac ac mi.
            </div>
        </div>
    </div>
</div>
