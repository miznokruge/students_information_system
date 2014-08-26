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

<?php echo $this->Session->flash(); ?>
<div class="row">
	<div class="col-md-8">      		
		<div class="widget stacked ">
			<div class="widget-header">
				<i class="icon-user"></i>
				<h3>Change Password</h3>
			</div> <!-- /widget-header -->
			<div class="widget-content">
				<div class="widget-content_left">
					<?php echo $this->Form->create('User', array('action' => 'changePassword')); ?>
					<div class="form-group">
						<div class="col-md-4"><?php echo __('Old Password'); ?></div>
						<div class="col-md-8"><?php echo $this->Form->input("oldpassword", array("type" => "password", 'label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
						
					</div>
					<div class="form-group">
						<div class="col-md-4"><?php echo __('New Password'); ?></div>
						<div class="col-md-8"><?php echo $this->Form->input("password", array("type" => "password", 'label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
						
					</div>
					<div class="form-group">
						<div class="col-md-4"><?php echo __('Confirm Password'); ?></div>
						<div class="col-md-8"><?php echo $this->Form->input("cpassword", array("type" => "password", 'label' => false, 'div' => false, 'class' => "umstyle5")) ?></div>
						
					</div>
					<div class="form-group">
						<div class="col-md-4"></div>
						<div class="col-md-8"><?php echo $this->Form->Submit(__('Change')); ?></div>
						
					</div>
					<?php echo $this->Form->end(); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="well">
			<h4>Extra Info</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div> <!-- /span4 -->
</div> <!-- /row -->
<script>
	document.getElementById("UserPassword").focus();
</script>