<div style="margin:10px autp;">
	<?php echo $this->Html->link(__("Compose"), array('action' => 'add'), array('class' => 'btn btn-primary btn-block')); ?>
</div>
<div style="margin:10px auto;">
	<ul class="nav nav-pills nav-stacked">
		<li class="<?php if ($this->request->params['action'] == 'inbox' || $this->request->params['action'] == 'index') { ?>active<?php } ?>"><?php echo $this->Html->link(__('Inbox'), array('action' => 'index')) ?></li>
		<li class="<?php if ($this->request->params['action'] == 'sent') { ?>active<?php } ?>"><?php echo $this->Html->link(__('Sent'), array('action' => 'sent')) ?></li>
		<li class="<?php if ($this->request->params['action'] == 'draft') { ?>active<?php } ?>"><?php echo $this->Html->link(__('Draft'), array('action' => 'draft')) ?></li>
		<li class="<?php if ($this->request->params['action'] == 'trash') { ?>active<?php } ?>"><?php echo $this->Html->link(__('Trash'), array('action' => 'trash')) ?></li>
		<li class="divider"></li>
		<li><a href="#">Settings</a></li>
	</ul>
</div>
