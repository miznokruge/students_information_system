<div class="row">
    <div class="notifications view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Notification'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($notification['Notification']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('User'); ?></td>
		<td>
			<?php echo $this->Html->link($notification['User']['id'], array('controller' => 'users', 'action' => 'view', $notification['User']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Title'); ?></td>
		<td>
			<?php echo h($notification['Notification']['title']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Message'); ?></td>
		<td>
			<?php echo h($notification['Notification']['message']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($notification['Notification']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($notification['Notification']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted'); ?></td>
		<td>
			<?php echo h($notification['Notification']['deleted']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Sender'); ?></td>
		<td>
			<?php echo $this->Html->link($notification['Sender']['id'], array('controller' => 'users', 'action' => 'view', $notification['Sender']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Type'); ?></td>
		<td>
			<?php echo h($notification['Notification']['type']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Target'); ?></td>
		<td>
			<?php echo h($notification['Notification']['target']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Is Read'); ?></td>
		<td>
			<?php echo h($notification['Notification']['is_read']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Read'); ?></td>
		<td>
			<?php echo h($notification['Notification']['read']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Notification'), array('action' => 'edit', $notification['Notification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Notification'), array('action' => 'delete', $notification['Notification']['id']), array(), __('Are you sure you want to delete # %s?', $notification['Notification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Notifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>