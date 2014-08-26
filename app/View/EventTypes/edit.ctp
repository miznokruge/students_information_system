<div class="eventTypes form">
<?php echo $this->Form->create('EventType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Event Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('descriptions');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EventType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('EventType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Event Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Student Events'), array('controller' => 'student_events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Event'), array('controller' => 'student_events', 'action' => 'add')); ?> </li>
	</ul>
</div>
