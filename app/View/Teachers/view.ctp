<div class="row">
    <div class="teachers view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Teacher'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($teacher['Teacher']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($teacher['Teacher']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Address'); ?></td>
		<td>
			<?php echo h($teacher['Teacher']['address']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Description'); ?></td>
		<td>
			<?php echo h($teacher['Teacher']['description']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Teacher'), array('action' => 'edit', $teacher['Teacher']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Teacher'), array('action' => 'delete', $teacher['Teacher']['id']), array(), __('Are you sure you want to delete # %s?', $teacher['Teacher']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher'), array('action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>