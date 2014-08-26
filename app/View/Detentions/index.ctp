<div class="detentions index">
	<h2><?php echo __('Detentions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('date_end'); ?></th>
			<th><?php echo $this->Paginator->sort('summary'); ?></th>
			<th><?php echo $this->Paginator->sort('details'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($detentions as $detention): ?>
	<tr>
		<td><?php echo h($detention['Detention']['id']); ?>&nbsp;</td>
		<td><?php echo h($detention['Detention']['date']); ?>&nbsp;</td>
		<td><?php echo h($detention['Detention']['date_end']); ?>&nbsp;</td>
		<td><?php echo h($detention['Detention']['summary']); ?>&nbsp;</td>
		<td><?php echo h($detention['Detention']['details']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detention['Student']['name'], array('controller' => 'students', 'action' => 'view', $detention['Student']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detention['Detention']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detention['Detention']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detention['Detention']['id']), array(), __('Are you sure you want to delete # %s?', $detention['Detention']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detention'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
