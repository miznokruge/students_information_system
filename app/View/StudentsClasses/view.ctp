<div class="studentsClasses view">
<h2><?php echo __('Students Class'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentsClass['StudentsClass']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teachers'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentsClass['Teachers']['name'], array('controller' => 'teachers', 'action' => 'view', $studentsClass['Teachers']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Students'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentsClass['Students']['name'], array('controller' => 'students', 'action' => 'view', $studentsClass['Students']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($studentsClass['StudentsClass']['details']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Students Class'), array('action' => 'edit', $studentsClass['StudentsClass']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Students Class'), array('action' => 'delete', $studentsClass['StudentsClass']['id']), array(), __('Are you sure you want to delete # %s?', $studentsClass['StudentsClass']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Students Classes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Students Class'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teachers'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Students'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
