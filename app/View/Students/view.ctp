<div class="students view">
<h2><?php echo __('Student'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($student['Student']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($student['Student']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($student['Student']['details']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['id']), array(), __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Acievements'); ?></h3>
	<?php if (!empty($student['Acievement'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Acievement'] as $acievement): ?>
		<tr>
			<td><?php echo $acievement['id']; ?></td>
			<td><?php echo $acievement['name']; ?></td>
			<td><?php echo $acievement['details']; ?></td>
			<td><?php echo $acievement['student_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'acievements', 'action' => 'view', $acievement['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'acievements', 'action' => 'edit', $acievement['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'acievements', 'action' => 'delete', $acievement['id']), array(), __('Are you sure you want to delete # %s?', $acievement['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Acievement'), array('controller' => 'acievements', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Behaviors'); ?></h3>
	<?php if (!empty($student['Behavior'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Behavior'] as $behavior): ?>
		<tr>
			<td><?php echo $behavior['id']; ?></td>
			<td><?php echo $behavior['details']; ?></td>
			<td><?php echo $behavior['date']; ?></td>
			<td><?php echo $behavior['student_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'behaviors', 'action' => 'view', $behavior['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'behaviors', 'action' => 'edit', $behavior['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'behaviors', 'action' => 'delete', $behavior['id']), array(), __('Are you sure you want to delete # %s?', $behavior['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Behavior'), array('controller' => 'behaviors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Detentions'); ?></h3>
	<?php if (!empty($student['Detention'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Date End'); ?></th>
		<th><?php echo __('Summary'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Detention'] as $detention): ?>
		<tr>
			<td><?php echo $detention['id']; ?></td>
			<td><?php echo $detention['date']; ?></td>
			<td><?php echo $detention['date_end']; ?></td>
			<td><?php echo $detention['summary']; ?></td>
			<td><?php echo $detention['details']; ?></td>
			<td><?php echo $detention['student_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'detentions', 'action' => 'view', $detention['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'detentions', 'action' => 'edit', $detention['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'detentions', 'action' => 'delete', $detention['id']), array(), __('Are you sure you want to delete # %s?', $detention['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Detention'), array('controller' => 'detentions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Student Addresses'); ?></h3>
	<?php if (!empty($student['StudentAddress'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Address Id'); ?></th>
		<th><?php echo __('Date From'); ?></th>
		<th><?php echo __('Date To'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['StudentAddress'] as $studentAddress): ?>
		<tr>
			<td><?php echo $studentAddress['id']; ?></td>
			<td><?php echo $studentAddress['student_id']; ?></td>
			<td><?php echo $studentAddress['address_id']; ?></td>
			<td><?php echo $studentAddress['date_from']; ?></td>
			<td><?php echo $studentAddress['date_to']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'student_addresses', 'action' => 'view', $studentAddress['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'student_addresses', 'action' => 'edit', $studentAddress['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'student_addresses', 'action' => 'delete', $studentAddress['id']), array(), __('Are you sure you want to delete # %s?', $studentAddress['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student Address'), array('controller' => 'student_addresses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Student Events'); ?></h3>
	<?php if (!empty($student['StudentEvent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Event Type Id'); ?></th>
		<th><?php echo __('Event Date'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['StudentEvent'] as $studentEvent): ?>
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
<div class="related">
	<h3><?php echo __('Related Student Loans'); ?></h3>
	<?php if (!empty($student['StudentLoan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['StudentLoan'] as $studentLoan): ?>
		<tr>
			<td><?php echo $studentLoan['id']; ?></td>
			<td><?php echo $studentLoan['date']; ?></td>
			<td><?php echo $studentLoan['amount']; ?></td>
			<td><?php echo $studentLoan['details']; ?></td>
			<td><?php echo $studentLoan['student_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'student_loans', 'action' => 'view', $studentLoan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'student_loans', 'action' => 'edit', $studentLoan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'student_loans', 'action' => 'delete', $studentLoan['id']), array(), __('Are you sure you want to delete # %s?', $studentLoan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student Loan'), array('controller' => 'student_loans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Transcripts'); ?></h3>
	<?php if (!empty($student['Transcript'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Transcript'] as $transcript): ?>
		<tr>
			<td><?php echo $transcript['id']; ?></td>
			<td><?php echo $transcript['date']; ?></td>
			<td><?php echo $transcript['details']; ?></td>
			<td><?php echo $transcript['student_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'transcripts', 'action' => 'view', $transcript['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'transcripts', 'action' => 'edit', $transcript['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'transcripts', 'action' => 'delete', $transcript['id']), array(), __('Are you sure you want to delete # %s?', $transcript['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Transcript'), array('controller' => 'transcripts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
