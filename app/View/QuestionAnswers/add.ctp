<div class="row">
    <div class="col-md-10">
        <div class="questionAnswers form">
            <?php
            echo $this->Form->create('QuestionAnswer', array(
                'inputDefaults' => array(
                    'div' => 'form-group',
                    'wrapInput' => false,
                    'class' => 'form-control'
                ),
                'class' => ''
            ));
            ?>
            <fieldset>
                <legend><?php echo __('Add Question Answer'); ?></legend>
                <?php
                echo $this->Form->input('question_id');
                echo $this->Form->input('user_id');
                echo $this->Form->input('answer');
                echo $this->Form->input('date');
                echo $this->Form->input('session_id');
                echo $this->Form->input('set_id');
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
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Question Answers'), array('action' => 'index'), array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Questions'), array('controller' => 'questions', 'action' => 'index'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New Question'), array('controller' => 'questions', 'action' => 'add'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New User'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
