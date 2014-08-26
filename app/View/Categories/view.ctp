<div class="row">
    <div class="categories view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Category'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Locked'); ?></td>
		<td>
			<?php echo h($category['Category']['locked']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted'); ?></td>
		<td>
			<?php echo h($category['Category']['deleted']); ?>
			&nbsp;
		</td>
</tr>                </table>

            </div>
        </div>

        <!-- disini -->

                    <div class="widget">
                <div class="widget-header">
                    <i class="icon-star"></i>
                    <h3><?php echo __('Related Sets'); ?></h3>
                </div> <!-- /widget-header -->
                <div class="widget-content">
                    <?php if (!empty($category['Set'])): ?>
                    <table cellpadding = "0" cellspacing = "0">
                        <tr>
                            		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Answeron'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Creator'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Isopen'); ?></th>
		<th><?php echo __('Tries'); ?></th>
		<th><?php echo __('Timeset'); ?></th>
		<th><?php echo __('Passpercent'); ?></th>
		<th><?php echo __('Passinfo'); ?></th>
		<th><?php echo __('Question Order Id'); ?></th>
		<th><?php echo __('Questionnumber'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        	<?php foreach ($category['Set'] as $set): ?>
		<tr>
			<td><?php echo $set['id']; ?></td>
			<td><?php echo $set['name']; ?></td>
			<td><?php echo $set['description']; ?></td>
			<td><?php echo $set['answeron']; ?></td>
			<td><?php echo $set['category_id']; ?></td>
			<td><?php echo $set['creator']; ?></td>
			<td><?php echo $set['password']; ?></td>
			<td><?php echo $set['isopen']; ?></td>
			<td><?php echo $set['tries']; ?></td>
			<td><?php echo $set['timeset']; ?></td>
			<td><?php echo $set['passpercent']; ?></td>
			<td><?php echo $set['passinfo']; ?></td>
			<td><?php echo $set['question_order_id']; ?></td>
			<td><?php echo $set['questionnumber']; ?></td>
			<td><?php echo $set['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sets', 'action' => 'view', $set['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sets', 'action' => 'edit', $set['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sets', 'action' => 'delete', $set['id']), array(), __('Are you sure you want to delete # %s?', $set['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                    </table>
                    <?php endif; ?>

                    <div class="actions">
                        <ul>
                            <li><?php echo $this->Html->link(__('New Set'), array('controller' => 'sets', 'action' => 'add')); ?> </li>
                        </ul>
                    </div>
                </div>
            </div>
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
                    		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array(), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sets'), array('controller' => 'sets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set'), array('controller' => 'sets', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>