<div class="row">
    <div class="questionAnswers view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Question Answer'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($questionAnswer['QuestionAnswer']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Question'); ?></td>
		<td>
			<?php echo $this->Html->link($questionAnswer['Question']['id'], array('controller' => 'questions', 'action' => 'view', $questionAnswer['Question']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('User'); ?></td>
		<td>
			<?php echo $this->Html->link($questionAnswer['User']['id'], array('controller' => 'users', 'action' => 'view', $questionAnswer['User']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Answer'); ?></td>
		<td>
			<?php echo h($questionAnswer['QuestionAnswer']['answer']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Date'); ?></td>
		<td>
			<?php echo h($questionAnswer['QuestionAnswer']['date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Session Id'); ?></td>
		<td>
			<?php echo h($questionAnswer['QuestionAnswer']['session_id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Set Id'); ?></td>
		<td>
			<?php echo h($questionAnswer['QuestionAnswer']['set_id']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Question Answer'), array('action' => 'edit', $questionAnswer['QuestionAnswer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Question Answer'), array('action' => 'delete', $questionAnswer['QuestionAnswer']['id']), array(), __('Are you sure you want to delete # %s?', $questionAnswer['QuestionAnswer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Question Answers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question Answer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>