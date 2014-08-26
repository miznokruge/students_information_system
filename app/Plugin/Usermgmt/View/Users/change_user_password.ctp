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
            <h3>Change User Password : <?php echo $this->request->query['name']; ?></h3>
        </div>

        <div class="widget-content" id="login">
            <div class="widget-content_left">
                <?php echo $this->Form->create('User'); ?>
                <div class="form-group">
                    <div class="col-md-4"><?php echo __('Password'); ?></div>
                    <div class="col-md-8"><?php echo $this->Form->input("password", array("type" => "password", 'label' => false, 'div' => false, 'class' => "form-control")) ?></div>

                </div>
                <div class="form-group">
                    <div class="col-md-4"><?php echo __('Confirm Password'); ?></div>
                    <div class="col-md-8"><?php echo $this->Form->input("cpassword", array("type" => "password", 'label' => false, 'div' => false, 'class' => "form-control")) ?></div>

                </div>
                <div class="form-group">
                    <div class="col-md-4"></div>
                    <div class="col-md-8"><?php echo $this->Form->Submit(__('Change')); ?></div>

                </div>
                <?php echo $this->Form->end(); ?>
            </div>
            <div class="widget-content_right" align="right"></div>

        </div>
    </div>
</div>

</div>
<script>
    document.getElementById("UserPassword").focus();
</script>