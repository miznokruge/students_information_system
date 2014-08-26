<div class="row">
    <div class="col-md-10">
        <div class="questions form">
            <?php
            echo $this->Form->create('Question', array(
                'type' => 'file',
                'inputDefaults' => array(
                    'div' => 'form-group',
                    'wrapInput' => false,
                    'class' => 'form-control'
                ),
                'class' => ''
            ));
            ?>
            <fieldset>
                <legend><?php echo __('Add Question'); ?></legend>
                <?php
                echo $this->Form->input('set_id');
                echo $this->Form->input('question');
                echo $this->Form->input('sol1');
                echo $this->Form->input('sol2');
                echo $this->Form->input('sol3');
                echo $this->Form->input('sol4');
                echo $this->Form->input('sol5');
                echo $this->Form->input('solution');
                echo $this->Form->input('solexp');
                echo $this->Form->input('ismcq');
                echo $this->Form->input('ismultiple');
                echo $this->Form->input('isoe');
                echo $this->Form->input('img', array("type" => "file"));
                echo $this->Form->input('imageext');
                echo $this->Form->input('isimport');
                echo $this->Form->input('status');
                ?>
            </fieldset>
            <button type="submit" class="btn btn-primary btn-large">Submit</button>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
    <div class="col-md-2">
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
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Questions'), array('action' => 'index'), array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Sets'), array('controller' => 'sets', 'action' => 'index'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New Set'), array('controller' => 'sets', 'action' => 'add'), array('escape' => false)); ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
