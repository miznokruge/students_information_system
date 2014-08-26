<div class="studentsClasses index">
	<h2><?php echo __('Students Classes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('teachers_id'); ?></th>
			<th><?php echo $this->Paginator->sort('students_id'); ?></th>
			<th><?php echo $this->Paginator->sort('details'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($studentsClasses as $studentsClass): ?>
	<tr>
		<td><?php echo h($studentsClass['StudentsClass']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($studentsClass['Teachers']['name'], array('controller' => 'teachers', 'action' => 'view', $studentsClass['Teachers']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($studentsClass['Students']['name'], array('controller' => 'students', 'action' => 'view', $studentsClass['Students']['id'])); ?>
		</td>
		<td><?php echo h($studentsClass['StudentsClass']['details']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $studentsClass['StudentsClass']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentsClass['StudentsClass']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $studentsClass['StudentsClass']['id']), array(), __('Are you sure you want to delete # %s?', $studentsClass['StudentsClass']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Students Class'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teachers'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Students'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
