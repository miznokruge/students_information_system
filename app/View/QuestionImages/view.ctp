<div class="row">
    <div class="questionImages view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Question Image'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($questionImage['QuestionImage']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Question'); ?></td>
		<td>
			<?php echo $this->Html->link($questionImage['Question']['id'], array('controller' => 'questions', 'action' => 'view', $questionImage['Question']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Src'); ?></td>
		<td>
			<?php echo h($questionImage['QuestionImage']['src']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Question Image'), array('action' => 'edit', $questionImage['QuestionImage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Question Image'), array('action' => 'delete', $questionImage['QuestionImage']['id']), array(), __('Are you sure you want to delete # %s?', $questionImage['QuestionImage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Question Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question Image'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>