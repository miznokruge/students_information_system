<div class="row">
    <div class="detentions view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Detention'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($detention['Detention']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Date'); ?></td>
		<td>
			<?php echo h($detention['Detention']['date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Date End'); ?></td>
		<td>
			<?php echo h($detention['Detention']['date_end']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Summary'); ?></td>
		<td>
			<?php echo h($detention['Detention']['summary']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Details'); ?></td>
		<td>
			<?php echo h($detention['Detention']['details']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Student'); ?></td>
		<td>
			<?php echo $this->Html->link($detention['Student']['name'], array('controller' => 'students', 'action' => 'view', $detention['Student']['id'])); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Detention'), array('action' => 'edit', $detention['Detention']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detention'), array('action' => 'delete', $detention['Detention']['id']), array(), __('Are you sure you want to delete # %s?', $detention['Detention']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detentions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detention'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>