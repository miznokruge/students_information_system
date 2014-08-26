<div class="row">
    <div class="studentAddresses view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Student Address'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($studentAddress['StudentAddress']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Student'); ?></td>
		<td>
			<?php echo $this->Html->link($studentAddress['Student']['name'], array('controller' => 'students', 'action' => 'view', $studentAddress['Student']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Address'); ?></td>
		<td>
			<?php echo $this->Html->link($studentAddress['Address']['id'], array('controller' => 'addresses', 'action' => 'view', $studentAddress['Address']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Date From'); ?></td>
		<td>
			<?php echo h($studentAddress['StudentAddress']['date_from']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Date To'); ?></td>
		<td>
			<?php echo h($studentAddress['StudentAddress']['date_to']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Student Address'), array('action' => 'edit', $studentAddress['StudentAddress']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student Address'), array('action' => 'delete', $studentAddress['StudentAddress']['id']), array(), __('Are you sure you want to delete # %s?', $studentAddress['StudentAddress']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Addresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Address'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>