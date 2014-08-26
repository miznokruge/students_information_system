<div class="students form">
<?php echo $this->Form->create('Student'); ?>
	<fieldset>
		<legend><?php echo __('Add Student'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Acievements'), array('controller' => 'acievements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acievement'), array('controller' => 'acievements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Behaviors'), array('controller' => 'behaviors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Behavior'), array('controller' => 'behaviors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detentions'), array('controller' => 'detentions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detention'), array('controller' => 'detentions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Addresses'), array('controller' => 'student_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Address'), array('controller' => 'student_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Events'), array('controller' => 'student_events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Event'), array('controller' => 'student_events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Loans'), array('controller' => 'student_loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Loan'), array('controller' => 'student_loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transcripts'), array('controller' => 'transcripts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transcript'), array('controller' => 'transcripts', 'action' => 'add')); ?> </li>
	</ul>
</div>
