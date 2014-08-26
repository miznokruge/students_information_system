<div class="row">
    <div class="statistics view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Statistic'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($statistic['Statistic']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Set'); ?></td>
		<td>
			<?php echo $this->Html->link($statistic['Set']['name'], array('controller' => 'sets', 'action' => 'view', $statistic['Set']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('User'); ?></td>
		<td>
			<?php echo $this->Html->link($statistic['User']['id'], array('controller' => 'users', 'action' => 'view', $statistic['User']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Score'); ?></td>
		<td>
			<?php echo h($statistic['Statistic']['score']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Totalscore'); ?></td>
		<td>
			<?php echo h($statistic['Statistic']['totalscore']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Rquestions'); ?></td>
		<td>
			<?php echo h($statistic['Statistic']['rquestions']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Wquestions'); ?></td>
		<td>
			<?php echo h($statistic['Statistic']['wquestions']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Time'); ?></td>
		<td>
			<?php echo h($statistic['Statistic']['time']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Deleted'); ?></td>
		<td>
			<?php echo h($statistic['Statistic']['deleted']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Statistic'), array('action' => 'edit', $statistic['Statistic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Statistic'), array('action' => 'delete', $statistic['Statistic']['id']), array(), __('Are you sure you want to delete # %s?', $statistic['Statistic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Statistics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Statistic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sets'), array('controller' => 'sets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set'), array('controller' => 'sets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>