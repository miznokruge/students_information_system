<div class="behaviors view">
<h2><?php echo __('Behavior'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($behavior['Behavior']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($behavior['Behavior']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($behavior['Behavior']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($behavior['Student']['name'], array('controller' => 'students', 'action' => 'view', $behavior['Student']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Behavior'), array('action' => 'edit', $behavior['Behavior']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Behavior'), array('action' => 'delete', $behavior['Behavior']['id']), array(), __('Are you sure you want to delete # %s?', $behavior['Behavior']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Behaviors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Behavior'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
