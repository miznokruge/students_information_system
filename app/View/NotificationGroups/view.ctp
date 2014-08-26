<div class="row">
    <div class="notificationGroups view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Notification Group'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($notificationGroup['NotificationGroup']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($notificationGroup['NotificationGroup']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted'); ?></td>
		<td>
			<?php echo h($notificationGroup['NotificationGroup']['deleted']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Notification Group'), array('action' => 'edit', $notificationGroup['NotificationGroup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Notification Group'), array('action' => 'delete', $notificationGroup['NotificationGroup']['id']), array(), __('Are you sure you want to delete # %s?', $notificationGroup['NotificationGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Notification Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notification Group'), array('action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>