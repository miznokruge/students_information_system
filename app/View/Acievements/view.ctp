<div class="acievements view">
<h2><?php echo __('Acievement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($acievement['Acievement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($acievement['Acievement']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($acievement['Acievement']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($acievement['Student']['name'], array('controller' => 'students', 'action' => 'view', $acievement['Student']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Acievement'), array('action' => 'edit', $acievement['Acievement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Acievement'), array('action' => 'delete', $acievement['Acievement']['id']), array(), __('Are you sure you want to delete # %s?', $acievement['Acievement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Acievements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acievement'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
