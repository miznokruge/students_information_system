<div class="row">
    <div class="behaviors view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Behavior'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($behavior['Behavior']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Details'); ?></td>
		<td>
			<?php echo h($behavior['Behavior']['details']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Date'); ?></td>
		<td>
			<?php echo h($behavior['Behavior']['date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Student'); ?></td>
		<td>
			<?php echo $this->Html->link($behavior['Student']['name'], array('controller' => 'students', 'action' => 'view', $behavior['Student']['id'])); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Behavior'), array('action' => 'edit', $behavior['Behavior']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Behavior'), array('action' => 'delete', $behavior['Behavior']['id']), array(), __('Are you sure you want to delete # %s?', $behavior['Behavior']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Behaviors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Behavior'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>