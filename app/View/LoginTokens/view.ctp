<div class="row">
    <div class="loginTokens view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Login Token'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($loginToken['LoginToken']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('User'); ?></td>
		<td>
			<?php echo $this->Html->link($loginToken['User']['id'], array('controller' => 'users', 'action' => 'view', $loginToken['User']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Token'); ?></td>
		<td>
			<?php echo h($loginToken['LoginToken']['token']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Duration'); ?></td>
		<td>
			<?php echo h($loginToken['LoginToken']['duration']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Used'); ?></td>
		<td>
			<?php echo h($loginToken['LoginToken']['used']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($loginToken['LoginToken']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Expires'); ?></td>
		<td>
			<?php echo h($loginToken['LoginToken']['expires']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted'); ?></td>
		<td>
			<?php echo h($loginToken['LoginToken']['deleted']); ?>
			&nbsp;
		</td>
</tr>                </table>

            </div>
        </div>

        <!-- disini -->

                    </div>
    <div class="col-md-2">
        <div style="margin-bottom:10px;">
            <?php echo $this->Html->link(__('<i class="icon icon-chevron-left"></i> Back to Index'), array('action' => 'index'),array('class'=>'btn btn-block btn-primary','escape'=>false)); ?> </li>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Actions'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">

                <ul class="nav-list">
                    		<li><?php echo $this->Html->link(__('Edit Login Token'), array('action' => 'edit', $loginToken['LoginToken']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Login Token'), array('action' => 'delete', $loginToken['LoginToken']['id']), array(), __('Are you sure you want to delete # %s?', $loginToken['LoginToken']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Login Tokens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Login Token'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>