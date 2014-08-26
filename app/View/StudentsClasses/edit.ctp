<div class="studentsClasses form">
<?php echo $this->Form->create('StudentsClass'); ?>
	<fieldset>
		<legend><?php echo __('Edit Students Class'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('teachers_id');
		echo $this->Form->input('students_id');
		echo $this->Form->input('details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StudentsClass.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('StudentsClass.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Students Classes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teachers'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Students'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
