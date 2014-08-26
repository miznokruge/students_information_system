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
    <div class="col-md-4 col-xs-12">
        <div class="account-container register">
            <div class="content clearfix">
                <?php echo $this->Form->create('User', array('action' => 'register')); ?>
                <h1>Create Your Account</h1>
                <div class="login-social">
                    <p>Sign in using social network:</p>
                    <div class="twitter">
                        <a href="#" class="btn_1">Login with Twitter</a>
                    </div>
                    <div class="fb">
                        <a href="#" class="btn_2">Login with Facebook</a>
                    </div>
                </div>
                <div class="login-fields">
                    <p>Create your free account:</p>
                    <?php if (count($userGroups) > 2) { ?>
                        <div class="field">
                            <label for="<?php echo __('Group'); ?>"><?php echo __('Group'); ?></label>
                            <?php echo $this->Form->input("user_group_id", array('type' => 'select', 'label' => false, 'div' => false, 'class' => "umstyle5")) ?>
                        </div>
                    <?php } ?>
                    <div class="field">
                        <label for="firstname">Username:</label>
                        <?php echo $this->Form->input("username", array('label' => false, 'div' => false, 'class' => "form-control", "placeholder" => "Username")) ?>
                    </div> <!-- /field -->
                    <div class="field">
                        <label for="firstname">First Name:</label>
                        <?php echo $this->Form->input("first_name", array('label' => false, 'div' => false, 'class' => "form-control", "placeholder" => "First Name")) ?>
                    </div> <!-- /field -->
                    <div class="field">
                        <label for="lastname">Last Name:</label>
                        <?php echo $this->Form->input("last_name", array('label' => false, 'div' => false, 'class' => "form-control", "placeholder" => "Last Name")) ?>
                    </div> <!-- /field -->
                    <div class="field">
                        <label for="email">Email Address:</label>
                        <?php echo $this->Form->input("email", array('label' => false, 'div' => false, 'class' => "form-control", "placeholder" => "Email")) ?>
                    </div> <!-- /field -->
                    <div class="field">
                        <label for="password">Password:</label>
                        <?php echo $this->Form->input("password", array('label' => false, 'div' => false, 'class' => "form-control", "placeholder" => "Password")) ?>
                    </div> <!-- /field -->
                    <div class="field">
                        <label for="confirm_password">Confirm Password:</label>
                        <?php echo $this->Form->input("cpassword", array('label' => false, 'div' => false, 'class' => "form-control", "placeholder" => "Confirm Password")) ?>
                    </div> <!-- /field -->
                    <?php if (USE_RECAPTCHA && PRIVATE_KEY_FROM_RECAPTCHA != "" && PUBLIC_KEY_FROM_RECAPTCHA != "") { ?>
                        <div class="field">
                            <?php echo $this->UserAuth->showCaptcha(isset($this->validationErrors['User']['captcha'][0]) ? $this->validationErrors['User']['captcha'][0] : ""); ?>
                        </div>
                    <?php } ?>
                </div> <!-- /login-fields -->
                <div class="login-actions">
                    <span class="login-checkbox">
                        <input id="Field" name="Field" class="field login-checkbox" value="First Choice" tabindex="4" type="checkbox">
                        <label class="choice" for="Field">I have read and agree with the Terms of Use.</label>
                    </span>
                    <button class="login-action btn btn-primary" type="submit">Register</button>
                </div> <!-- .actions -->
                <?php echo $this->Form->end(); ?>
            </div> <!-- /content -->
        </div> <!-- /account-container -->
        <!-- Text Under Box -->
        <div class="login-extra">
            Already have an account? <?php echo $this->Html->link(__("Sign In", true), "/login") ?>
        </div> <!-- /login-extra -->
    </div>
    <div class="col-md-7 pull-right">
        <div class="well">
            <h2>
                Info
            </h2>
        </div>
    </div>
</div>
</div>
<script>
    document.getElementById("UserUsername").focus();
</script>