<div class="row">
    <div class="col-md-10">
        <div class="sets form">
            <?php
            echo $this->Form->create('Set', array(
                'inputDefaults' => array(
                    'div' => 'form-group',
                    'wrapInput' => false,
                    'class' => 'form-control'
                ),
                'class' => ''
            ));
            ?>
            <fieldset>
                <legend><?php echo __('Edit Set'); ?></legend>
                <?php
                echo $this->Form->input('id');
                echo $this->Form->input('name');
                echo $this->Form->input('description');
                echo $this->Form->input('answeron', array("class" => 'col-md-3'));
                echo $this->Form->input('category_id');
                echo $this->Form->input('creator');
                echo $this->Form->input('password');
                echo $this->Form->input('isopen');
                echo $this->Form->input('tries');
                echo $this->Form->input('timeset');
                echo $this->Form->input('passpercent');
                echo $this->Form->input('passinfo');
                echo $this->Form->input('question_order_id');
                echo $this->Form->input('questionnumber');
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
                    <li><?php echo $this->Form->postLink(__('<i class="icon icon-trash"></i> Delete'), array('action' => 'delete', $this->Form->value('Set.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Set.id'))); ?></li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Sets'), array('action' => 'index'), array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Categories'), array('controller' => 'categories', 'action' => 'index'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New Category'), array('controller' => 'categories', 'action' => 'add'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Question Orders'), array('controller' => 'question_orders', 'action' => 'index'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New Question Order'), array('controller' => 'question_orders', 'action' => 'add'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Comments'), array('controller' => 'comments', 'action' => 'index'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New Comment'), array('controller' => 'comments', 'action' => 'add'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Questions'), array('controller' => 'questions', 'action' => 'index'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New Question'), array('controller' => 'questions', 'action' => 'add'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Ratings'), array('controller' => 'ratings', 'action' => 'index'), array('escape' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New Rating'), array('controller' => 'ratings', 'action' => 'add'), array('escape' => false)); ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
