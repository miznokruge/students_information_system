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
            <h3><?php echo __('Access Denied'); ?></h3>
        </div>
        <div class="widget-content">
            <div class="widget-content_left">
                Sorry, You don't have permission to view that page. go to <span  class="umstyle6"><?php echo $this->Html->link(__("Dashboard", true), "/dashboard") ?></span><br/><br/>
                <br/><br/>
            </div>
            <div class="widget-content_right" align="right"></div>
        </div>
    </div>
</div>