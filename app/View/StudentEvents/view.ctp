<div class="studentEvents view">
<h2><?php echo __('Student Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentEvent['StudentEvent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentEvent['Student']['name'], array('controller' => 'students', 'action' => 'view', $studentEvent['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentEvent['EventType']['name'], array('controller' => 'event_types', 'action' => 'view', $studentEvent['EventType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Date'); ?></dt>
		<dd>
			<?php echo h($studentEvent['StudentEvent']['event_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($studentEvent['StudentEvent']['details']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student Event'), array('action' => 'edit', $studentEvent['StudentEvent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student Event'), array('action' => 'delete', $studentEvent['StudentEvent']['id']), array(), __('Are you sure you want to delete # %s?', $studentEvent['StudentEvent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Types'), array('controller' => 'event_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Type'), array('controller' => 'event_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
