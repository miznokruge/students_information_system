<div class="row">
    <div class="col-md-10">
        <div class="messages form">
            <?php
echo $this->Form->create('Message', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'wrapInput' => false,
        'class' => 'form-control'
    ),
    'class' => ''
));
?>
            <fieldset>
                <legend><?php echo __('Add Message'); ?></legend>
                	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('message');
		echo $this->Form->input('status');
		echo $this->Form->input('user_id');
		echo $this->Form->input('sender_id');
		echo $this->Form->input('is_read');
	?>
            </fieldset>
            <button type="submit" class="btn btn-primary btn-large">Submit</button>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
    <div class="col-md-2">
        <div style="margin-bottom:10px;">
            <?php echo $this->Html->link(__('<i class="icon icon-chevron-left"></i> Back to Index'), array('action' => 'index'),array('class'=>'btn btn-block btn-primary','escape'=>false)); ?> </li>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-th-list"></i>
                <h3><?php echo __('Actions'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <ul class="nav nav-list nav-stacked">
                                        <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Messages'), array('action' => 'index'),array('escape'=>false)); ?></li>
                                    </ul>
            </div>
        </div>
    </div>
</div>
