<div class="row">
    <div class="sets view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Set'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($set['Set']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($set['Set']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Description'); ?></td>
		<td>
			<?php echo h($set['Set']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Answeron'); ?></td>
		<td>
			<?php echo h($set['Set']['answeron']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Category'); ?></td>
		<td>
			<?php echo $this->Html->link($set['Category']['name'], array('controller' => 'categories', 'action' => 'view', $set['Category']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Creator'); ?></td>
		<td>
			<?php echo h($set['Set']['creator']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Password'); ?></td>
		<td>
			<?php echo h($set['Set']['password']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Isopen'); ?></td>
		<td>
			<?php echo h($set['Set']['isopen']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Tries'); ?></td>
		<td>
			<?php echo h($set['Set']['tries']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Timeset'); ?></td>
		<td>
			<?php echo h($set['Set']['timeset']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Passpercent'); ?></td>
		<td>
			<?php echo h($set['Set']['passpercent']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Passinfo'); ?></td>
		<td>
			<?php echo h($set['Set']['passinfo']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Question Order'); ?></td>
		<td>
			<?php echo $this->Html->link($set['QuestionOrder']['name'], array('controller' => 'question_orders', 'action' => 'view', $set['QuestionOrder']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Questionnumber'); ?></td>
		<td>
			<?php echo h($set['Set']['questionnumber']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted'); ?></td>
		<td>
			<?php echo h($set['Set']['deleted']); ?>
			&nbsp;
		</td>
</tr>                </table>

            </div>
        </div>

        <!-- disini -->

                    <div class="widget">
                <div class="widget-header">
                    <i class="icon-star"></i>
                    <h3><?php echo __('Related Comments'); ?></h3>
                </div> <!-- /widget-header -->
                <div class="widget-content">
                    <?php if (!empty($set['Comment'])): ?>
                    <table cellpadding = "0" cellspacing = "0">
                        <tr>
                            		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Set Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        	<?php foreach ($set['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['set_id']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td><?php echo $comment['comment']; ?></td>
			<td><?php echo $comment['time']; ?></td>
			<td><?php echo $comment['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), array(), __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                    </table>
                    <?php endif; ?>

                    <div class="actions">
                        <ul>
                            <li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
                        </ul>
                    </div>
                </div>
            </div>
                    <div class="widget">
                <div class="widget-header">
                    <i class="icon-star"></i>
                    <h3><?php echo __('Related Questions'); ?></h3>
                </div> <!-- /widget-header -->
                <div class="widget-content">
                    <?php if (!empty($set['Question'])): ?>
                    <table cellpadding = "0" cellspacing = "0">
                        <tr>
                            		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Set Id'); ?></th>
		<th><?php echo __('Question'); ?></th>
		<th><?php echo __('Sol1'); ?></th>
		<th><?php echo __('Sol2'); ?></th>
		<th><?php echo __('Sol3'); ?></th>
		<th><?php echo __('Sol4'); ?></th>
		<th><?php echo __('Sol5'); ?></th>
		<th><?php echo __('Solution'); ?></th>
		<th><?php echo __('Solexp'); ?></th>
		<th><?php echo __('Ismcq'); ?></th>
		<th><?php echo __('Ismultiple'); ?></th>
		<th><?php echo __('Isoe'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Imageext'); ?></th>
		<th><?php echo __('Isimport'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        	<?php foreach ($set['Question'] as $question): ?>
		<tr>
			<td><?php echo $question['id']; ?></td>
			<td><?php echo $question['set_id']; ?></td>
			<td><?php echo $question['question']; ?></td>
			<td><?php echo $question['sol1']; ?></td>
			<td><?php echo $question['sol2']; ?></td>
			<td><?php echo $question['sol3']; ?></td>
			<td><?php echo $question['sol4']; ?></td>
			<td><?php echo $question['sol5']; ?></td>
			<td><?php echo $question['solution']; ?></td>
			<td><?php echo $question['solexp']; ?></td>
			<td><?php echo $question['ismcq']; ?></td>
			<td><?php echo $question['ismultiple']; ?></td>
			<td><?php echo $question['isoe']; ?></td>
			<td><?php echo $question['image']; ?></td>
			<td><?php echo $question['imageext']; ?></td>
			<td><?php echo $question['isimport']; ?></td>
			<td><?php echo $question['status']; ?></td>
			<td><?php echo $question['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'questions', 'action' => 'view', $question['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'questions', 'action' => 'edit', $question['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'questions', 'action' => 'delete', $question['id']), array(), __('Are you sure you want to delete # %s?', $question['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                    </table>
                    <?php endif; ?>

                    <div class="actions">
                        <ul>
                            <li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
                        </ul>
                    </div>
                </div>
            </div>
                    <div class="widget">
                <div class="widget-header">
                    <i class="icon-star"></i>
                    <h3><?php echo __('Related Ratings'); ?></h3>
                </div> <!-- /widget-header -->
                <div class="widget-content">
                    <?php if (!empty($set['Rating'])): ?>
                    <table cellpadding = "0" cellspacing = "0">
                        <tr>
                            		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Set Id'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        	<?php foreach ($set['Rating'] as $rating): ?>
		<tr>
			<td><?php echo $rating['id']; ?></td>
			<td><?php echo $rating['user_id']; ?></td>
			<td><?php echo $rating['set_id']; ?></td>
			<td><?php echo $rating['rating']; ?></td>
			<td><?php echo $rating['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ratings', 'action' => 'view', $rating['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ratings', 'action' => 'edit', $rating['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ratings', 'action' => 'delete', $rating['id']), array(), __('Are you sure you want to delete # %s?', $rating['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                    </table>
                    <?php endif; ?>

                    <div class="actions">
                        <ul>
                            <li><?php echo $this->Html->link(__('New Rating'), array('controller' => 'ratings', 'action' => 'add')); ?> </li>
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
                    		<li><?php echo $this->Html->link(__('Edit Set'), array('action' => 'edit', $set['Set']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Set'), array('action' => 'delete', $set['Set']['id']), array(), __('Are you sure you want to delete # %s?', $set['Set']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Question Orders'), array('controller' => 'question_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question Order'), array('controller' => 'question_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ratings'), array('controller' => 'ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rating'), array('controller' => 'ratings', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>