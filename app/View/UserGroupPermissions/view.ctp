<div class="row">
    <div class="userGroupPermissions view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('User Group Permission'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($userGroupPermission['UserGroupPermission']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('User Group'); ?></td>
		<td>
			<?php echo $this->Html->link($userGroupPermission['UserGroup']['name'], array('controller' => 'user_groups', 'action' => 'view', $userGroupPermission['UserGroup']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Controller'); ?></td>
		<td>
			<?php echo h($userGroupPermission['UserGroupPermission']['controller']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Action'); ?></td>
		<td>
			<?php echo h($userGroupPermission['UserGroupPermission']['action']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Allowed'); ?></td>
		<td>
			<?php echo h($userGroupPermission['UserGroupPermission']['allowed']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted'); ?></td>
		<td>
			<?php echo h($userGroupPermission['UserGroupPermission']['deleted']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit User Group Permission'), array('action' => 'edit', $userGroupPermission['UserGroupPermission']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Group Permission'), array('action' => 'delete', $userGroupPermission['UserGroupPermission']['id']), array(), __('Are you sure you want to delete # %s?', $userGroupPermission['UserGroupPermission']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Group Permissions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group Permission'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>