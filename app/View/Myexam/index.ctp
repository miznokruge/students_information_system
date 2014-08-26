<div class = "statistics index row">
    <div class = "col-md-10">
        <h3 class = "index-title"><?php echo __('My Exam History');
?></h3>
        <?php echo $this->Form->create('Statistic', array('type' => 'get', 'style' => 'margin:5px auto;', 'action' => 'index')); ?>        <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="search" placeholder="search" value="<?php echo $search_term; ?>">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="icon icon-search"></i> Search
                </button>
            </span>
            <span class="input-group-btn" style="margin: auto 5px;">
                <?php echo $this->Html->link('<i class="icon icon-refresh"></i> View All', array('controller' => 'myexam', 'action' => 'index'), array('class' => 'btn btn-default', 'escape' => false)); ?>            </span>
        </div>
        <?php echo $this->Form->end(); ?>        <table class="table table-striped table-bordered table-responsive">
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('time'); ?></th>
                <th><?php echo $this->Paginator->sort('set_id'); ?></th>
                <th><?php echo $this->Paginator->sort('id', 'Required Score'); ?></th>
                <th><?php echo $this->Paginator->sort('totalscore', 'totalscore(%)'); ?></th>
                <th><?php echo $this->Paginator->sort('id', 'Status'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
            foreach ($statistics as $statistic):
                if ($statistic['Statistic']['totalscore'] >= $statistic['Set']['passpercent']) {
                    $res = '<label class="label label-success">Passed</label>';
                } else {
                    $res = '<label class="label label-danger">Failed</label>';
                }
                ?>
                <tr>
                    <td><?php echo h($statistic['Statistic']['id']); ?>&nbsp;</td>
                    <td><?php echo h($statistic['Statistic']['time']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($statistic['Set']['name'], array('controller' => 'sets', 'action' => 'view', $statistic['Set']['id'])); ?>
                    </td>
                    <td><?php echo h($statistic['Set']['passpercent']); ?>&nbsp;</td>
                    <td><?php echo h($statistic['Statistic']['totalscore']); ?>&nbsp;</td>
                    <td><?php echo $res; ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('<i class="icon-zoom-in"></i> View'), array('action' => 'view', $statistic['Statistic']['id']), array('escape' => false, 'class' => 'ui-popover btn btn-default btn-sm', 'data-container' => 'body', 'data-toggle' => 'popover', 'data-trigger' => 'hover', 'data-placement' => 'top', 'data-content' => 'Click to view the details of this record.', 'title' => '', 'data-original-title' => 'Information')); ?>
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
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-star"></i>
                    <h3><?php echo __('Actions'); ?></h3>
                </div> <!-- /widget-header -->
                <div class="widget-content">
                    <ul class="nav nav-list">
                        <li><?php echo $this->Html->link(__('New Statistic'), array('action' => 'add')); ?></li>
                        <li><?php echo $this->Html->link(__('List Sets'), array('controller' => 'sets', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New Set'), array('controller' => 'sets', 'action' => 'add')); ?> </li>
                        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
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
