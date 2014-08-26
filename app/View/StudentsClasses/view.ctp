<div class="row">
    <div class="studentsClasses view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Students Class'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($studentsClass['StudentsClass']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Teachers'); ?></td>
		<td>
			<?php echo $this->Html->link($studentsClass['Teachers']['name'], array('controller' => 'teachers', 'action' => 'view', $studentsClass['Teachers']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Students'); ?></td>
		<td>
			<?php echo $this->Html->link($studentsClass['Students']['name'], array('controller' => 'students', 'action' => 'view', $studentsClass['Students']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Details'); ?></td>
		<td>
			<?php echo h($studentsClass['StudentsClass']['details']); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Students Class'), array('action' => 'edit', $studentsClass['StudentsClass']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Students Class'), array('action' => 'delete', $studentsClass['StudentsClass']['id']), array(), __('Are you sure you want to delete # %s?', $studentsClass['StudentsClass']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Students Classes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Students Class'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teachers'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Students'), array('controller' => 'students', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>