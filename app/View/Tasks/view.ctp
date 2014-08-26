<div class="row">
    <div class="tasks view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Task'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($task['Task']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($task['Task']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Description'); ?></td>
		<td>
			<?php echo h($task['Task']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deadline Date'); ?></td>
		<td>
			<?php echo h($task['Task']['deadline_date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('User'); ?></td>
		<td>
			<?php echo $this->Html->link($task['User']['id'], array('controller' => 'users', 'action' => 'view', $task['User']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($task['Task']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($task['Task']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted'); ?></td>
		<td>
			<?php echo h($task['Task']['deleted']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($task['Task']['status']); ?>
			&nbsp;
		</td>
</tr>                </table>

            </div>
        </div>

        <!-- disini -->

                    </div>
    <div class="col-md-2">
        <div style="margin-bottom:10px;">
            <?php echo $this->Html->link(__('<i class="icon icon-chevron-left"></i> Back to Index'), array('action' => 'index'),array('class'=>'btn btn-block btn-primary','escape'=>false)); ?> </li>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Actions'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">

                <ul class="nav-list">
                    		<li><?php echo $this->Html->link(__('Edit Task'), array('action' => 'edit', $task['Task']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Task'), array('action' => 'delete', $task['Task']['id']), array(), __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>