<div class="sets index row">
    <div class="col-md-10">
        <h3 class="index-title"><?php echo __('Exam'); ?></h3>
        <?php echo $this->Form->create('Set', array('type' => 'get', 'style' => 'margin:5px auto;', 'url' => array('controller' => 'exam', 'action' => 'index'))); ?>        <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="search" placeholder="search" value="<?php echo $search_term; ?>">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="icon icon-search"></i> Search
                </button>
            </span>
            <span class="input-group-btn" style="margin: auto 5px;">
                <?php echo $this->Html->link('<i class="icon icon-refresh"></i> View All', array('controller' => 'exam', 'action' => 'index'), array('class' => 'btn btn-default', 'escape' => false)); ?>            </span>
        </div>
        <?php echo $this->Form->end(); ?>
        <section id="unseen">
            <table class="table table-striped table-bordered table-responsive">
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                    <?php if (strtolower($this->UserAuth->getGroupName()) == 'admin') { ?>
                        <th><?php echo $this->Paginator->sort('description'); ?></th>
                        <th><?php echo $this->Paginator->sort('answeron'); ?></th>
                    <?php } ?>
                    <th><?php echo $this->Paginator->sort('category_id'); ?></th>
                    <?php if (strtolower($this->UserAuth->getGroupName()) == 'admin') { ?>
                        <th><?php echo $this->Paginator->sort('creator'); ?></th>
                        <th><?php echo $this->Paginator->sort('password'); ?></th>
                    <?php } ?>
                    <th><?php echo $this->Paginator->sort('isopen', 'Open?'); ?></th>
                    <th><?php echo $this->Paginator->sort('tries'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($sets as $set): ?>
                    <tr>
                        <td><?php echo h($set['Set']['id']); ?>&nbsp;</td>
                        <td><?php echo h($set['Set']['name']); ?>&nbsp;</td>
                        <?php if (strtolower($this->UserAuth->getGroupName()) == 'admin') { ?>
                            <td><?php echo h($set['Set']['description']); ?>&nbsp;</td>
                            <td><?php echo h($set['Set']['answeron']); ?>&nbsp;</td>
                        <?php } ?>
                        <td>
                            <?php echo $this->Html->link($set['Category']['name'], array('controller' => 'categories', 'action' => 'view', $set['Category']['id'])); ?>
                        </td>
                        <?php if (strtolower($this->UserAuth->getGroupName()) == 'admin') { ?>
                            <td><?php echo h($set['Set']['creator']); ?>&nbsp;</td>
                            <td><?php echo h($set['Set']['password']); ?>&nbsp;</td>
                        <?php } ?>
                        <td><?php if ($set['Set']['isopen'] == '1'): ?><i class="icon-ok"></i><?php else: ?> <i class="icon-remove"></i><?php endif; ?></td>
                        <td><?php echo h($set['Set']['tries']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('<i class="icon-zoom-in"></i> View'), array('action' => 'view', $set['Set']['id']), array('escape' => false, 'class' => 'ui-popover btn-primary btn btn-xs', 'data-container' => 'body', 'data-toggle' => 'popover', 'data-trigger' => 'hover', 'data-placement' => 'top', 'data-content' => 'Click to view the details of this record.', 'title' => '', 'data-original-title' => 'Information')); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
        <div class="row">
            <div class="col-md-5 col-lg-offset-1">
                <?php
                echo $this->Paginator->pagination(array(
                    "ul" => "pagination"
                ));
                ?>            </div>
            <div class="col-md-6" style="margin-top:30px;">
                <?php
                echo $this->Paginator->counter(array(
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                ));
                ?></div>
        </div>
    </div>
    <div class="col-md-2">
        <?php if (strtolower($this->UserAuth->getGroupName()) == 'admin') { ?>
            <div style="margin-bottom:10px;">
                <?php echo $this->Html->link(__('<i class="icon icon-ok-sign"></i> Add New Record'), array('action' => 'add'), array('class' => 'btn btn-block btn-primary', 'escape' => false)); ?> </li>
            </div>
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-star"></i>
                    <h3><?php echo __('Actions'); ?></h3>
                </div> <!-- /widget-header -->
                <div class="widget-content">
                    <ul class="nav nav-list">
                        <li><?php echo $this->Html->link(__('New Set'), array('action' => 'add')); ?></li>
                        <li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('List Question Orders'), array('controller' => 'question_orders', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Question Order'), array('controller' => 'question_orders', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('List Ratings'), array('controller' => 'ratings', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Rating'), array('controller' => 'ratings', 'action' => 'add')); ?> </li>
                    </ul>
                </div>
            </div>
        <?php } ?>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-th"></i>
                <h3><?php echo __('Informasi'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                Sed rhoncus metus vel congue volutpat? Vestibulum laoreet orci consectetur lectus congue blandit? Integer condimentum fringilla libero,
            </div>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-th"></i>
                <h3><?php echo __('Informasi'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                Donec sit amet tellus euismod, ullamcorper libero eu, aliquam ante. Nullam vitae urna tincidunt lacus posuere ultrices ac ac mi.
            </div>
        </div>
    </div>
</div>
