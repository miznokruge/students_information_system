<?php
/*
  This file is part of UserMgmt.

  Author: Chetan Varshney (http://ektasoftwares.com)

  UserMgmt is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  UserMgmt is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<div class="row">
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->element('dashboard'); ?>


    <div class="widget stacked">
        <div class="widget-header">
            <h3><i class="icon-th-list"></i> <?php echo __('Add User'); ?></h3>

        </div>

        <div class="widget-content" id="register">
            <div class="widget-content_left">
                <?php echo $this->Form->create('User', array('action' => 'addUser')); ?>
                <?php if (count($userGroups) > 2) { ?>
                    <div class="form-group">
                        <div class="col-md-3"><?php echo __('Group'); ?><font color='red'>*</font></div>
                        <div class="col-md-9" ><?php echo $this->Form->input("user_group_id", array('type' => 'select', 'label' => false, 'div' => false, 'class' => "form-control")) ?></div>

                    </div>
                <?php } ?>
                <div class="form-group">
                    <div class="col-md-3"><?php echo __('Username'); ?><font color='red'>*</font></div>
                    <div class="col-md-9" ><?php echo $this->Form->input("username", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>

                </div>
                <div class="form-group">
                    <div class="col-md-3"><?php echo __('First Name'); ?><font color='red'>*</font></div>
                    <div class="col-md-9" ><?php echo $this->Form->input("first_name", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>

                </div>
                <div class="form-group">
                    <div class="col-md-3"><?php echo __('Last Name'); ?><font color='red'>*</font></div>
                    <div class="col-md-9" ><?php echo $this->Form->input("last_name", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>

                </div>
                <div class="form-group">
                    <div class="col-md-3"><?php echo __('Email'); ?><font color='red'>*</font></div>
                    <div class="col-md-9" ><?php echo $this->Form->input("email", array('label' => false, 'div' => false, 'class' => "form-control")) ?></div>

                </div>
                <div class="form-group">
                    <div class="col-md-3"><?php echo __('Password'); ?><font color='red'>*</font></div>
                    <div class="col-md-9"><?php echo $this->Form->input("password", array("type" => "password", 'label' => false, 'div' => false, 'class' => "form-control")) ?></div>

                </div>
                <div class="form-group">
                    <div class="col-md-3"><?php echo __('Confirm Password'); ?><font color='red'>*</font></div>
                    <div class="col-md-9"><?php echo $this->Form->input("cpassword", array("type" => "password", 'label' => false, 'div' => false, 'class' => "form-control")) ?></div>

                </div>
                <div class="form-group">
                    <div class="col-md-3"></div>
                    <div class="col-md-9"><?php echo $this->Form->Submit(__('Add User')); ?></div>

                </div>
                <?php echo $this->Form->end(); ?>
            </div>
            <div class="widget-content_right" align="right"></div>

        </div>
    </div>
</div>

</div>
<script>
    document.getElementById("UserUserGroupId").focus();
</script>
<style>

    .form-group{
        height: 50px;
        margin: 5px auto;
    }

</style>
