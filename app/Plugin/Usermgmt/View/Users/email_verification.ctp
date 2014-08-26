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
    <div class="widget stacked">
        <div class="widget-header">
            <h3 class="pull-left"><?php echo __('Email Verification'); ?></h3>
        </div>
        <div class="widget-content" id="forgot">
            <?php echo $this->Form->create('User', array('action' => 'emailVerification')); ?>
            <div class="form-group">
                <div class="col-md-10" ><?php echo $this->Form->input("email", array('label' => false, 'div' => false, 'class' => "form-control", "placeholder" => __('Enter Email / Username'))) ?></div>
                <div class="col-md-2"><?php echo $this->Form->Submit(__('Send Email')); ?></div>
            </div>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>