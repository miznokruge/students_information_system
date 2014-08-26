<div class="row">
    <div class="eventTypes view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Event Type'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($eventType['EventType']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($eventType['EventType']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Descriptions'); ?></td>
		<td>
			<?php echo h($eventType['EventType']['descriptions']); ?>
			&nbsp;
		</td>
</tr>                </table>

            </div>
        </div>

        <!-- disini -->

                    <div class="widget">
                <div class="widget-header">
                    <i class="icon-star"></i>
                    <h3><?php echo __('Related Student Events'); ?></h3>
                </div> <!-- /widget-header -->
                <div class="widget-content">
                    <?php if (!empty($eventType['StudentEvent'])): ?>
                    <table cellpadding = "0" cellspacing = "0">
                        <tr>
                            		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Event Type Id'); ?></th>
		<th><?php echo __('Event Date'); ?></th>
		<th><?php echo __('Details'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        	<?php foreach ($eventType['StudentEvent'] as $studentEvent): ?>
		<tr>
			<td><?php echo $studentEvent['id']; ?></td>
			<td><?php echo $studentEvent['student_id']; ?></td>
			<td><?php echo $studentEvent['event_type_id']; ?></td>
			<td><?php echo $studentEvent['event_date']; ?></td>
			<td><?php echo $studentEvent['details']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'student_events', 'action' => 'view', $studentEvent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'student_events', 'action' => 'edit', $studentEvent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'student_events', 'action' => 'delete', $studentEvent['id']), array(), __('Are you sure you want to delete # %s?', $studentEvent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                    </table>
                    <?php endif; ?>

                    <div class="actions">
                        <ul>
                            <li><?php echo $this->Html->link(__('New Student Event'), array('controller' => 'student_events', 'action' => 'add')); ?> </li>
                        </ul>
                    </div>
                </div>
            </div>
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
                    		<li><?php echo $this->Html->link(__('Edit Event Type'), array('action' => 'edit', $eventType['EventType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event Type'), array('action' => 'delete', $eventType['EventType']['id']), array(), __('Are you sure you want to delete # %s?', $eventType['EventType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Events'), array('controller' => 'student_events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Event'), array('controller' => 'student_events', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>