<div class="detentions view">
<h2><?php echo __('Detention'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($detention['Detention']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($detention['Detention']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date End'); ?></dt>
		<dd>
			<?php echo h($detention['Detention']['date_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary'); ?></dt>
		<dd>
			<?php echo h($detention['Detention']['summary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($detention['Detention']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detention['Student']['name'], array('controller' => 'students', 'action' => 'view', $detention['Student']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detention'), array('action' => 'edit', $detention['Detention']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detention'), array('action' => 'delete', $detention['Detention']['id']), array(), __('Are you sure you want to delete # %s?', $detention['Detention']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detentions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detention'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
