<div class="row">
    <div class="studentLoans view col-md-10">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-star"></i>
                <h3><?php echo __('Student Loan'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <table class="table-striped table">
                    <tr>		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($studentLoan['StudentLoan']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Date'); ?></td>
		<td>
			<?php echo h($studentLoan['StudentLoan']['date']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Amount'); ?></td>
		<td>
			<?php echo h($studentLoan['StudentLoan']['amount']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><?php echo __('Details'); ?></td>
		<td>
			<?php echo h($studentLoan['StudentLoan']['details']); ?>
			&nbsp;
		</td>
</tr><tr>		<td width="200"><?php echo __('Student'); ?></td>
		<td>
			<?php echo $this->Html->link($studentLoan['Student']['name'], array('controller' => 'students', 'action' => 'view', $studentLoan['Student']['id'])); ?>
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
                    		<li><?php echo $this->Html->link(__('Edit Student Loan'), array('action' => 'edit', $studentLoan['StudentLoan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student Loan'), array('action' => 'delete', $studentLoan['StudentLoan']['id']), array(), __('Are you sure you want to delete # %s?', $studentLoan['StudentLoan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Loans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Loan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>