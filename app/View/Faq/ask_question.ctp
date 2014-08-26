<div class="row">
    <div class="col-md-8">
        <div class="faqs form">
            <?php
            echo $this->Form->create('Faq', array(
                'inputDefaults' => array(
                    'div' => 'form-group',
                    'wrapInput' => false,
                    'class' => 'form-control'
                ),
                'class' => ''
            ));
            ?>
            <fieldset>
                <legend><?php echo __('Ask question'); ?></legend>
                <p>
                    We would like to hear from you and we well keep secret of your identity.

                    We thanks for your participation.
                </p>
                <?php
                if (!$this->UserAuth->isLogged()) {
                    echo $this->Form->input('name', array("label" => "Your Name", 'class' => 'required form-control'));
                    echo $this->Form->input('email', array("label" => "Your Email"));
                }
                echo $this->Form->input('question');
                ?>
            </fieldset>
            <button type="submit" class="btn btn-primary btn-large">Submit</button>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-th-list"></i>
                <h3><?php echo __('Info'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <p>
                    We would like to hear from you and we well keep secret of your identity. We thanks for your participation.
                </p>
            </div>
        </div>
    </div>
</div>
