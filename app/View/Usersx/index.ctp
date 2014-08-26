<div class="users index row">
    <div class="col-md-10">
        <h3 class="index-title"><?php echo __('Users'); ?></h3>
        <?php echo $this->Form->create('User', array('type' => 'get', 'style' => 'margin:5px auto;', 'action' => 'index')); ?>        <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="search" placeholder="search" value="<?php echo $search_term; ?>">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="icon icon-search"></i> Search
                </button>
            </span>
            <span class="input-group-btn" style="margin: auto 5px;">
                <?php echo $this->Html->link('<i class="icon icon-refresh"></i> View All', array('controller' => 'Users', 'action' => 'index'), array('class' => 'btn btn-default', 'escape' => false)); ?>            </span>
        </div>
        <?php echo $this->Form->end(); ?>        <table class="table table-striped table-bordered table-responsive">
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('username'); ?></th>
                <th><?php echo $this->Paginator->sort('password'); ?></th>
                <th><?php echo $this->Paginator->sort('email'); ?></th>
                <th><?php echo $this->Paginator->sort('template'); ?></th>
                <th><?php echo $this->Paginator->sort('cancreate'); ?></th>
                <th><?php echo $this->Paginator->sort('isadmin'); ?></th>
                <th><?php echo $this->Paginator->sort('approved'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['password']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['email']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['template']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['cancreate']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['isadmin']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['approved']); ?>&nbsp;</td>
                    <td class="actions">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">			<li><?php echo $this->Html->link(__('<i class="icon-zoom-in"></i> View'), array('action' => 'view', $user['User']['id']), array('escape' => false, 'class' => 'ui-popover', 'data-container' => 'body', 'data-toggle' => 'popover', 'data-trigger' => 'hover', 'data-placement' => 'top', 'data-content' => 'Click to view the details of this record.', 'title' => '', 'data-original-title' => 'Information')); ?></li>
                                <li><?php echo $this->Html->link(__('<i class="icon-edit"></i> Edit'), array('action' => 'edit', $user['User']['id']), array('escape' => false, 'class' => 'ui-popover', 'data-container' => 'body', 'data-toggle' => 'popover', 'data-trigger' => 'hover', 'data-placement' => 'top', 'data-content' => 'Click to edit this record.', 'title' => '', 'data-original-title' => 'Information')); ?></li>
                                <li><?php echo $this->Form->postLink(__('<i class="icon-trash"></i> Delete'), array('action' => 'delete', $user['User']['id']), array('escape' => false, 'class' => 'ui-popover', 'data-container' => 'body', 'data-toggle' => 'popover', 'data-trigger' => 'hover', 'data-placement' => 'top', 'data-content' => 'Click to delete this record.', 'title' => '', 'data-original-title' => 'Information'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?></li>
                            </ul>
                        </div>		</td>
                </tr>
            <?php endforeach; ?>
        </table>
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
                    <li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
                    <li><?php echo $this->Html->link(__('List Ratings'), array('controller' => 'ratings', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Rating'), array('controller' => 'ratings', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
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
