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
<div class="row">
    <div class="col-md-10">
        <div class="<?php echo $pluralVar; ?> form">
            <?php echo "<?php
echo \$this->Form->create('{$modelClass}', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'wrapInput' => false,
        'class' => 'form-control'
    ),
    'class' => ''
));
?>\n"; ?>
            <fieldset>
                <legend><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></legend>
                <?php
                echo "\t<?php\n";
                foreach ($fields as $field) {
                    if (strpos($action, 'add') !== false && $field === $primaryKey) {
                        continue;
                    } elseif (!in_array($field, array('created', 'modified', 'updated', 'deleted'))) {
                        echo "\t\techo \$this->Form->input('{$field}');\n";
                    }
                }
                if (!empty($associations['hasAndBelongsToMany'])) {
                    foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
                        echo "\t\techo \$this->Form->input('{$assocName}');\n";
                    }
                }
                echo "\t?>\n";
                ?>
            </fieldset>
            <button type="submit" class="btn btn-primary btn-large">Submit</button>
            <?php echo "<?php echo \$this->Form->end(); ?>\n";
            ?>
        </div>
    </div>
    <div class="col-md-2">
        <div style="margin-bottom:10px;">
            <?php echo "<?php echo \$this->Html->link(__('<i class=\"icon icon-chevron-left\"></i> Back to Index'), array('action' => 'index'),array('class'=>'btn btn-block btn-primary','escape'=>false)); ?> </li>\n";?>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-th-list"></i>
                <h3><?php echo "<?php echo __('Actions'); ?>"; ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <ul class="nav nav-list nav-stacked">
                    <?php if (strpos($action, 'add') === false): ?>
                        <li><?php echo "<?php echo \$this->Form->postLink(__('<i class=\"icon icon-trash\"></i> Delete'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')),array('escape'=>false), __('Are you sure you want to delete # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>"; ?></li>
                    <?php endif; ?>
                    <li><?php echo "<?php echo \$this->Html->link(__('<i class=\"icon icon-th-list\"></i> List " . $pluralHumanName . "'), array('action' => 'index'),array('escape'=>false)); ?>"; ?></li>
                    <?php
                    $done = array();
                    foreach ($associations as $type => $data) {
                        foreach ($data as $alias => $details) {
                            if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
                                echo "\t\t<li><?php echo \$this->Html->link(__('<i class=\"icon icon-th-list\"></i> List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index'),array('escape'=>false)); ?> </li>\n";
                                echo "\t\t<li><?php echo \$this->Html->link(__('<i class=\"icon icon-th-list\"></i> New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'),array('escape'=>false)); ?> </li>\n";
                                $done[] = $details['controller'];
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
