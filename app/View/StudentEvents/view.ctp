<div class="row">
    <div class="studentEvents view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Student Event'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($studentEvent['StudentEvent']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Student'); ?></td>
		<td>
			<?php echo $this->Html->link($studentEvent['Student']['name'], array('controller' => 'students', 'action' => 'view', $studentEvent['Student']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Event Type'); ?></td>
		<td>
			<?php echo $this->Html->link($studentEvent['EventType']['name'], array('controller' => 'event_types', 'action' => 'view', $studentEvent['EventType']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Event Date'); ?></td>
		<td>
			<?php echo h($studentEvent['StudentEvent']['event_date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Details'); ?></td>
		<td>
			<?php echo h($studentEvent['StudentEvent']['details']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Student Event'), array('action' => 'edit', $studentEvent['StudentEvent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student Event'), array('action' => 'delete', $studentEvent['StudentEvent']['id']), array(), __('Are you sure you want to delete # %s?', $studentEvent['StudentEvent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Types'), array('controller' => 'event_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Type'), array('controller' => 'event_types', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>