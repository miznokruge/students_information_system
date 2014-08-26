<div class="row">
    <div class="users view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('User'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('User Group'); ?></td>
		<td>
			<?php echo $this->Html->link($user['UserGroup']['name'], array('controller' => 'user_groups', 'action' => 'view', $user['UserGroup']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Username'); ?></td>
		<td>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Password'); ?></td>
		<td>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Salt'); ?></td>
		<td>
			<?php echo h($user['User']['salt']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Email'); ?></td>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('First Name'); ?></td>
		<td>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Last Name'); ?></td>
		<td>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Email Verified'); ?></td>
		<td>
			<?php echo h($user['User']['email_verified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Active'); ?></td>
		<td>
			<?php echo h($user['User']['active']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Ip Address'); ?></td>
		<td>
			<?php echo h($user['User']['ip_address']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted'); ?></td>
		<td>
			<?php echo h($user['User']['deleted']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Phone'); ?></td>
		<td>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Address'); ?></td>
		<td>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Postal Code'); ?></td>
		<td>
			<?php echo h($user['User']['postal_code']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Avatar'); ?></td>
		<td>
			<?php echo h($user['User']['avatar']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>