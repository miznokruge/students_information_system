<div class="row">
    <div class="logs view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Log'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($log['Log']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Ipaddress'); ?></td>
		<td>
			<?php echo h($log['Log']['ipaddress']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Time'); ?></td>
		<td>
			<?php echo h($log['Log']['time']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Userid'); ?></td>
		<td>
			<?php echo h($log['Log']['userid']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Isblocked'); ?></td>
		<td>
			<?php echo h($log['Log']['isblocked']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted'); ?></td>
		<td>
			<?php echo h($log['Log']['deleted']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Log'), array('action' => 'edit', $log['Log']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Log'), array('action' => 'delete', $log['Log']['id']), array(), __('Are you sure you want to delete # %s?', $log['Log']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>