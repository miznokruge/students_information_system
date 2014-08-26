<div class="row">
    <div class="acievements view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Acievement'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($acievement['Acievement']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($acievement['Acievement']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Details'); ?></td>
		<td>
			<?php echo h($acievement['Acievement']['details']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Student'); ?></td>
		<td>
			<?php echo $this->Html->link($acievement['Student']['name'], array('controller' => 'students', 'action' => 'view', $acievement['Student']['id'])); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Acievement'), array('action' => 'edit', $acievement['Acievement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Acievement'), array('action' => 'delete', $acievement['Acievement']['id']), array(), __('Are you sure you want to delete # %s?', $acievement['Acievement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Acievements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acievement'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>