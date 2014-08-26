<div class="row">
    <div class="transcripts view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Transcript'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($transcript['Transcript']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Date'); ?></td>
		<td>
			<?php echo h($transcript['Transcript']['date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Details'); ?></td>
		<td>
			<?php echo h($transcript['Transcript']['details']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Student'); ?></td>
		<td>
			<?php echo $this->Html->link($transcript['Student']['name'], array('controller' => 'students', 'action' => 'view', $transcript['Student']['id'])); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Transcript'), array('action' => 'edit', $transcript['Transcript']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transcript'), array('action' => 'delete', $transcript['Transcript']['id']), array(), __('Are you sure you want to delete # %s?', $transcript['Transcript']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transcripts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transcript'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>