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
				<span class="pull-left"><?php echo __('All Groups'); ?></span>
				<span class="pull-right" style="float:right"><?php echo $this->Html->link(__("Home",true),"/") ?></span>
				
			</div>
			
			<div class="widget-content" id="index">
				<table class="table table-striped">
					<thead>
						<tr>
							<th><?php echo __('Group Id');?></th>
							<th><?php echo __('Name');?></th>
							<th><?php echo __('Alias Name');?></th>
							<th><?php echo __('Allow Registration');?></th>
							<th><?php echo __('Created');?></th>
							<th><?php echo __('Action');?></th>
						</tr>
					</thead>
					<tbody>
				<?php   if(!empty($userGroups)) {
							foreach ($userGroups as $row) {
								echo "<tr>";
								echo "<td>".$row['UserGroup']['id']."</td>";
								echo "<td>".h($row['UserGroup']['name'])."</td>";
								echo "<td>".h($row['UserGroup']['alias_name'])."</td>";
								echo "<td>";
								if ($row['UserGroup']['allowRegistration']) {
									echo "Yes";
								} else {
									echo "No";
								}
								echo"</td>";
								echo "<td>".date('d-M-Y',strtotime($row['UserGroup']['created']))."</td>";
								echo "<td>";
									echo "<span class='icon'><a href='".$this->Html->url('/editGroup/'.$row['UserGroup']['id'])."'><img src='".SITE_URL."usermgmt/img/edit.png' border='0' alt='Edit' title='Edit'></a></span>";
									if ($row['UserGroup']['id']!=1) {
										echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/delete.png', array("alt" => __('Delete'), "title" => __('Delete'))), array('action' => 'deleteGroup', $row['UserGroup']['id']), array('escape' => false, 'confirm' => __('Are you sure you want to delete this group? Delete it your own risk')));
									}
								echo "</td>";
								echo "</tr>";
							}
						} else {
							echo "<tr><td colspan=6><br/><br/>No Data</td></tr>";
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</div>