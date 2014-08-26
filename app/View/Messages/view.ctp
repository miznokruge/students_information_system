<div class="row">
    <div class="messages view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Message'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($message['Message']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($message['Message']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Email'); ?></td>
		<td>
			<?php echo h($message['Message']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Message'); ?></td>
		<td>
			<?php echo h($message['Message']['message']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted'); ?></td>
		<td>
			<?php echo h($message['Message']['deleted']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($message['Message']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($message['Message']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($message['Message']['status']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('User Id'); ?></td>
		<td>
			<?php echo h($message['Message']['user_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Sender Id'); ?></td>
		<td>
			<?php echo h($message['Message']['sender_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Is Read'); ?></td>
		<td>
			<?php echo h($message['Message']['is_read']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Message'), array('action' => 'edit', $message['Message']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Message'), array('action' => 'delete', $message['Message']['id']), array(), __('Are you sure you want to delete # %s?', $message['Message']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>