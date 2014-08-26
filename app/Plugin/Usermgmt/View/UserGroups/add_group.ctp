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
				<span class="pull-left"><?php echo __('Add Group'); ?></span>
				<span class="pull-right" style="float:right"><?php echo $this->Html->link(__("Home",true),"/") ?></span>
				
			</div>
			
			<div class="widget-content" id="addgroup">
				<?php echo $this->Form->create('UserGroup', array('action' => 'addGroup')); ?>
				<div class="form-group">
					<div class="col-md-4"><?php echo __('Group Name');?><font color='red'>*</font></div>
					<div class="col-md-8" ><?php echo $this->Form->input("name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div class="umstyle7">for ex. Business User</div>
					
				</div>
				<div class="form-group">
					<div class="col-md-4"><?php echo __('Alias Group Name');?><font color='red'>*</font></div>
					<div class="col-md-8" ><?php echo $this->Form->input("alias_name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div class="umstyle7">for ex. Business_User (Must not contain space)</div>
					
				</div>
				<div class="form-group">
				<?php   if (!isset($this->request->data['UserGroup']['allowRegistration'])) {
							$this->request->data['UserGroup']['allowRegistration']=true;
						}   ?>
					<div class="col-md-4"><?php echo __('Allow Registration');?></div>
					<div class="col-md-8"><?php echo $this->Form->input("allowRegistration" ,array("type"=>"checkbox",'label' => false))?></div>
					
				</div>
				<div class="form-group">
					<div class="col-md-4"></div>
					<div class="col-md-8"><?php echo $this->Form->Submit(__('Add Group'));?></div>
					
				</div>
				<div class="form-group">Note: If you add a new group then you should give permissions to this newly created Group.</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
	
</div>
<script>
document.getElementById("UserUserGroupId").focus();
</script>