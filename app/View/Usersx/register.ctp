<div class="row">
    <div class="col-md-6">
        <div class="users form">
            <?php
            echo $this->Form->create('User', array(
                'inputDefaults' => array(
                    'div' => 'form-group',
                    'wrapInput' => false,
                    'class' => 'form-control'
                ),
                'class' => ''
            ));
            ?>
            <fieldset>
                <legend><?php echo __('Add User'); ?></legend>
                <?php
                echo $this->Form->input('username', array("type" => 'text'));
                echo $this->Form->input('password');
                echo $this->Form->input('email');
                ?>
            </fieldset>
            <button type="submit" class="btn btn-primary btn-large">Submit</button>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
    <div class="col-md-6">
        <div style="margin-bottom:10px;">
            <?php echo $this->Html->link(__('<i class="icon icon-chevron-left"></i> Back to Index'), array('action' => 'index'), array('class' => 'btn btn-block btn-primary', 'escape' => false)); ?> </li>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-th-list"></i>
                <h3><?php echo __('Actions'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <ul class="nav nav-list nav-stacked">
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Users'), array('action' => 'index'), array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Comments'), array('controller' => 'comments', 'action' => 'index'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New Comment'), array('controller' => 'comments', 'action' => 'add'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Ratings'), array('controller' => 'ratings', 'action' => 'index'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New Rating'), array('controller' => 'ratings', 'action' => 'add'), array('escape' => false)); ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
