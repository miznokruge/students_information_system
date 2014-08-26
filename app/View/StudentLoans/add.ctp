<div class="studentLoans form">
<?php echo $this->Form->create('StudentLoan'); ?>
	<fieldset>
		<legend><?php echo __('Add Student Loan'); ?></legend>
	<?php
		echo $this->Form->input('date');
		echo $this->Form->input('amount');
		echo $this->Form->input('details');
		echo $this->Form->input('student_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Student Loans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
