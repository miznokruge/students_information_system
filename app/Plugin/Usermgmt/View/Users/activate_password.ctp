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
				<span class="pull-left"><?php echo __('Reset Password'); ?></span>
				<span class="pull-right" style="float:right"><?php echo $this->Html->link(__("Home",true),"/") ?></span>
				
			</div>
			
			<div class="widget-content" id="login">
				<div class="widget-content_left">
					<?php echo $this->Form->create('User', array('action' => 'activatePassword')); ?>
					<div class="form-group">
						<div class="col-md-4"><?php echo __('Password');?></div>
						<div class="col-md-8"><?php echo $this->Form->input("password" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						
					</div>
					<div class="form-group">
						<div class="col-md-4"><?php echo __('Confirm Password');?></div>
						<div class="col-md-8"><?php echo $this->Form->input("cpassword" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						
					</div>
					<div class="form-group">
						<div class="col-md-4"></div>
						<div class="col-md-8">
				<?php   if (!isset($ident)) {
							$ident='';
						}
						if (!isset($activate)) {
							$activate='';
						}   ?>
						<?php echo $this->Form->hidden('ident',array('value'=>$ident))?>
						<?php echo $this->Form->hidden('activate',array('value'=>$activate))?>
						<?php echo $this->Form->Submit(__('Reset'));?></div>
						
					</div>
					<?php echo $this->Form->end(); ?>
				</div>
				<div class="widget-content_right" align="right"></div>
				
			</div>
		</div>
	</div>
	
</div>
<script>
document.getElementById("UserEmail").focus();
</script>