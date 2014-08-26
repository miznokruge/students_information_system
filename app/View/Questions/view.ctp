<div class="row">
    <div class="questions view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Question'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($question['Question']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Set'); ?></td>
		<td>
			<?php echo $this->Html->link($question['Set']['name'], array('controller' => 'sets', 'action' => 'view', $question['Set']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Question'); ?></td>
		<td>
			<?php echo h($question['Question']['question']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Sol1'); ?></td>
		<td>
			<?php echo h($question['Question']['sol1']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Sol2'); ?></td>
		<td>
			<?php echo h($question['Question']['sol2']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Sol3'); ?></td>
		<td>
			<?php echo h($question['Question']['sol3']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Sol4'); ?></td>
		<td>
			<?php echo h($question['Question']['sol4']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Sol5'); ?></td>
		<td>
			<?php echo h($question['Question']['sol5']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Solution'); ?></td>
		<td>
			<?php echo h($question['Question']['solution']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Solexp'); ?></td>
		<td>
			<?php echo h($question['Question']['solexp']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Ismcq'); ?></td>
		<td>
			<?php echo h($question['Question']['ismcq']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Ismultiple'); ?></td>
		<td>
			<?php echo h($question['Question']['ismultiple']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Isoe'); ?></td>
		<td>
			<?php echo h($question['Question']['isoe']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Image'); ?></td>
		<td>
			<?php echo h($question['Question']['image']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Imageext'); ?></td>
		<td>
			<?php echo h($question['Question']['imageext']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Isimport'); ?></td>
		<td>
			<?php echo h($question['Question']['isimport']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($question['Question']['status']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted'); ?></td>
		<td>
			<?php echo h($question['Question']['deleted']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Question'), array('action' => 'edit', $question['Question']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Question'), array('action' => 'delete', $question['Question']['id']), array(), __('Are you sure you want to delete # %s?', $question['Question']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sets'), array('controller' => 'sets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set'), array('controller' => 'sets', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>