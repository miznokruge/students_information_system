<div class="eventTypes view">
<h2><?php echo __('Event Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventType['EventType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($eventType['EventType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descriptions'); ?></dt>
		<dd>
			<?php echo h($eventType['EventType']['descriptions']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event Type'), array('action' => 'edit', $eventType['EventType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event Type'), array('action' => 'delete', $eventType['EventType']['id']), array(), __('Are you sure you want to delete # %s?', $eventType['EventType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Events'), array('controller' => 'student_events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Event'), array('controller' => 'student_events', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Student Events'); ?></h3>
	<?php if (!empty($eventType['StudentEvent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Event Type Id'); ?></th>
		<th><?php echo __('Event Date'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($eventType['StudentEvent'] as $studentEvent): ?>
		<tr>
			<td><?php echo $studentEvent['id']; ?></td>
			<td><?php echo $studentEvent['student_id']; ?></td>
			<td><?php echo $studentEvent['event_type_id']; ?></td>
			<td><?php echo $studentEvent['event_date']; ?></td>
			<td><?php echo $studentEvent['details']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'student_events', 'action' => 'view', $studentEvent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'student_events', 'action' => 'edit', $studentEvent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'student_events', 'action' => 'delete', $studentEvent['id']), array(), __('Are you sure you want to delete # %s?', $studentEvent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student Event'), array('controller' => 'student_events', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
