<div class="detentions form">
<?php echo $this->Form->create('Detention'); ?>
	<fieldset>
		<legend><?php echo __('Edit Detention'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('date_end');
		echo $this->Form->input('summary');
		echo $this->Form->input('details');
		echo $this->Form->input('student_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Detention.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Detention.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Detentions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
