<div class="transcripts view">
<h2><?php echo __('Transcript'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($transcript['Transcript']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($transcript['Transcript']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($transcript['Transcript']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transcript['Student']['name'], array('controller' => 'students', 'action' => 'view', $transcript['Student']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transcript'), array('action' => 'edit', $transcript['Transcript']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transcript'), array('action' => 'delete', $transcript['Transcript']['id']), array(), __('Are you sure you want to delete # %s?', $transcript['Transcript']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transcripts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transcript'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
