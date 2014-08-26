<div class="row">
    <?php
    if ($this->UserAuth->isLogged()) {
        echo $this->element('dashboard_' . strtolower($this->UserAuth->getGroupName()));
    } else {
        echo $this->element('dashboard_default');
    }
    ?>
</div>