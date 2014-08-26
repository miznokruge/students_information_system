<div class="row">
    <div class="tmasters view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Tmaster'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($tmaster['Tmaster']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($tmaster['Tmaster']['name']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Tmaster'), array('action' => 'edit', $tmaster['Tmaster']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tmaster'), array('action' => 'delete', $tmaster['Tmaster']['id']), array(), __('Are you sure you want to delete # %s?', $tmaster['Tmaster']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tmasters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tmaster'), array('action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>