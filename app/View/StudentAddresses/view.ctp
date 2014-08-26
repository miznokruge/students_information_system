<div class="studentAddresses view">
<h2><?php echo __('Student Address'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentAddress['StudentAddress']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentAddress['Student']['name'], array('controller' => 'students', 'action' => 'view', $studentAddress['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentAddress['Address']['id'], array('controller' => 'addresses', 'action' => 'view', $studentAddress['Address']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date From'); ?></dt>
		<dd>
			<?php echo h($studentAddress['StudentAddress']['date_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date To'); ?></dt>
		<dd>
			<?php echo h($studentAddress['StudentAddress']['date_to']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
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
