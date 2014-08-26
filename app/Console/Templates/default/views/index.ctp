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
        <div class="widget stacked widget-table action-table">
            <div class="widget-header">
                <div class="col-md-6">
                    <i class="icon-th-list"></i>
                    <h3><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></h3>
                </div>
                <div class="col-md-6">
                    <?php echo '<?php echo $this->Form->create("search",array("type"=>"get"));?>'; ?>
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <span class="icon icon-search"></span>
                            </button>
                        </span>
                    </div>
                    <?php echo '<?php echo $this->Form->end();?>'; ?>
                </div>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table table-striped table-bordered">
                    <tr>
                        <?php foreach ($fields as $field): ?>
                            <th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
                        <?php endforeach; ?>
                        <th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
                    </tr>
                    <?php
                    echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
                    echo "\t<tr>\n";
                    foreach ($fields as $field) {
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

                    echo "\t\t<td class=\"actions\">\n";
                    echo "\t\t\t<?php echo \$this->Html->link(__('View'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
                    echo "\t\t\t<?php echo \$this->Html->link(__('Edit'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
                    echo "\t\t\t<?php echo \$this->Form->postLink(__('Delete'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array(), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
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
            </div> <!-- /widget-content -->
        </div> <!-- /widget -->
    </div>
    <div class="col-md-2">
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
                <i class="icon-star"></i>
                <h3><?php echo __('Actions'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                Sed rhoncus metus vel congue volutpat? Vestibulum laoreet orci consectetur lectus congue blandit? Integer condimentum fringilla libero,
            </div>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Actions'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                Donec sit amet tellus euismod, ullamcorper libero eu, aliquam ante. Nullam vitae urna tincidunt lacus posuere ultrices ac ac mi.

            </div>
        </div>
    </div>
</div>
