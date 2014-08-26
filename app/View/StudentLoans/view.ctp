<div class="studentLoans view">
<h2><?php echo __('Student Loan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentLoan['StudentLoan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($studentLoan['StudentLoan']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($studentLoan['StudentLoan']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($studentLoan['StudentLoan']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentLoan['Student']['name'], array('controller' => 'students', 'action' => 'view', $studentLoan['Student']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student Loan'), array('action' => 'edit', $studentLoan['StudentLoan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student Loan'), array('action' => 'delete', $studentLoan['StudentLoan']['id']), array(), __('Are you sure you want to delete # %s?', $studentLoan['StudentLoan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Loans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Loan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
