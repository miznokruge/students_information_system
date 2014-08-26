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
echo $this->Html->script('/usermgmt/js/umupdate');
?>
<div class="row">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->element('dashboard'); ?>
	
	
		<div class="widget stacked">
			<div class="widget-header">
				<div class="umstyle1"  align="left" style="float:left"><?php echo __('User Group Permissions');?></div>
				<div style="float:right">
					<span  class="pull-right"><?php __('Select Controller');?></span>  <?php echo $this->Form->input("controller",array('type'=>'select','div'=>false,'options'=>$allControllers,'selected'=>$c,'label'=>false,"onchange"=>"window.location='".SITE_URL."permissions/?c='+(this).value"))?>
				</div>
				
			</div>
			
			<div class="widget-content" id="permissions">
		<?php   if (!empty($controllers)) { ?>
					<input type="hidden" id="BASE_URL" value="<?php echo SITE_URL?>">
					<input type="hidden" id="groups" value="<?php echo $groups?>">
					<table cellspacing="0" cellpadding="0" width="100%" border="0">
						<thead>
							<tr>
								<th> <?php echo __("Controller");?> </th>
								<th> <?php echo __("Action");?> </th>
								<th> <?php echo __("Permission");?> </th>
								<th> <?php echo __("Operation");?> </th>
							</tr>
						</thead>
						<tbody>
			<?php
					$k=1;
					foreach ($controllers as $key=>$value) {
						if (!empty($value)) {
							for ($i=0; $i<count($value); $i++) {
								if (isset($value[$i])) {
									$action=$value[$i];
									echo $this->Form->create();
									echo $this->Form->hidden('controller',array('id'=>'controller'.$k,'value'=>$key));
									echo $this->Form->hidden('action',array('id'=>'action'.$k,'value'=>$action));
									echo "<tr>";
									echo "<td>".$key."</td>";
									echo "<td>".$action."</td>";
									echo "<td>";
									foreach ($user_groups as $user_group) {
										$ugname=$user_group['name'];
										$ugname_alias=$user_group['alias_name'];
										if (isset($value[$action][$ugname_alias]) && $value[$action][$ugname_alias]==1) {
											$checked=true;
										} else {
											$checked=false;
										}
										echo $this->Form->input($ugname,array('id'=>$ugname_alias.$k,'type'=>'checkbox','checked'=>$checked));
									}
									echo "</td>";
									echo "<td>";
									echo $this->Form->button('Update', array('type'=>'button','id'=>'mybutton123','name'=>$k,'onClick'=>'javascript:update_fields('.$k.');', 'class'=>'umbtn'));
									echo "<div id='updateDiv".$k."' align='right' class='updateDiv'>&nbsp;</div>";
									echo "</td>";
									echo "</tr>";
									echo $this->Form->end();
									$k++;
								}
							}
						}
					} ?>
					</tbody>
				</table>
		<?php   }   ?>
			</div>
		</div>
	</div>
	
</div>
<style>
	.checkbox{
		float: left;
		margin-right: 10px;
		width:80px;
	}
	
	</style>