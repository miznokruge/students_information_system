<div class="eventTypes index">
	<h2><?php echo __('Event Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('descriptions'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($eventTypes as $eventType): ?>
	<tr>
		<td><?php echo h($eventType['EventType']['id']); ?>&nbsp;</td>
		<td><?php echo h($eventType['EventType']['name']); ?>&nbsp;</td>
		<td><?php echo h($eventType['EventType']['descriptions']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $eventType['EventType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $eventType['EventType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $eventType['EventType']['id']), array(), __('Are you sure you want to delete # %s?', $eventType['EventType']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Event Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Student Events'), array('controller' => 'student_events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Event'), array('controller' => 'student_events', 'action' => 'add')); ?> </li>
	</ul>
</div>
