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
$avatar = str_replace('.', '_100.', $user['User']['avatar']);
?>
<?php echo $this->Session->flash();
?>
<div class="row">
    <div class="col-md-8">
        <div class="widget stacked ">
            <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Your Account</h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#profile" data-toggle="tab">Profile</a>
                        </li>
                        <!--                        <li><a href="#settings" data-toggle="tab">Settings</a></li>-->
                        <li><a href="#avatar" data-toggle="tab">Avatar</a></li>
                    </ul>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile">
                            <div class="row">
                                <div class="col-md-2">
                                    <?php echo $this->Html->image('avatar/' . $avatar); ?>
                                </div>
                                <div class="col-md-10">
                                    <table class="table">
                                        <tbody>
                                            <?php if (!empty($user)) { ?>
                                                <tr>
                                                    <td><strong><?php echo __('User Id'); ?></strong></td>
                                                    <td><?php echo $user['User']['id'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong><?php echo __('User Group'); ?></strong></td>
                                                    <td><?php echo h($user['UserGroup']['name']) ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong><?php echo __('Username'); ?></strong></td>
                                                    <td><?php echo h($user['User']['username']) ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong><?php echo __('First Name'); ?></strong></td>
                                                    <td><?php echo h($user['User']['first_name']) ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong><?php echo __('Last Name'); ?></strong></td>
                                                    <td><?php echo h($user['User']['last_name']) ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong><?php echo __('Email'); ?></strong></td>
                                                    <td><?php echo h($user['User']['email']) ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong><?php echo __('Email Verified'); ?></strong></td>
                                                    <td><?php
                                                        if ($user['User']['email_verified']) {
                                                            echo 'Yes';
                                                        } else {
                                                            echo 'No';
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong><?php echo __('Status'); ?></strong></td>
                                                    <td><?php
                                                        if ($user['User']['active']) {
                                                            echo 'Active';
                                                        } else {
                                                            echo 'Inactive';
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong><?php echo __('Created'); ?></strong></td>
                                                    <td><?php echo date('d-M-Y', strtotime($user['User']['created'])) ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong><?php echo __('Membership Status'); ?></strong></td>
                                                    <td><?php echo $user['Membership']['name'] ?>
                                                        <br/>
                                                        <?php echo $this->Html->link(__('Upgrade paket premium, diskon 30%'), array('controller' => 'upgrade', 'action' => 'ugrade', 'plugin' => false), array('class' => 'btn btn-primary')); ?>

                                                    </td>
                                                </tr>
                                                <?php
                                            } else {
                                                echo "<tr><td colspan=2><br/><br/>No Data</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings">
                            <form id="edit-profile2" class="form-horizontal col-md-8">
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-4" for="accounttype">Account Type</label>
                                        <div class="col-md-8">
                                            <div class="radio">
                                                <label>
                                                    <input name="accounttype" value="option1" checked="checked" id="accounttype" type="radio">
                                                    POP3
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="accounttype" value="option2" type="radio">
                                                    IMAP
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" for="accountusername">Account Username</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="accountusername" value="rod.howard@example.com" type="text">
                                            <p class="help-block">Leave blank to use your profile email address.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" for="emailserver">Email Server</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="emailserver" value="mail.example.com" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" for="accountpassword">Password</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="accountpassword" value="password" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" for="accountadvanced">Advanced Settings</label>
                                        <div class="col-md-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input name="accountadvanced" value="option1" checked="checked" id="accountadvanced" type="checkbox">
                                                    User encrypted connection when accessing this server
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="accounttype" value="option2" type="checkbox">
                                                    Download all message on connection
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-8">
                                            <button type="submit" class="btn btn-primary">Save</button> <button class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="tab-pane" id="avatar">
                            <?php echo $this->Html->image('avatar/' . $avatar); ?>
                            <?php echo $this->Form->create('User', array("type" => "file")); ?>
                            <?php
                            echo $this->Form->input('avatar', array("type" => "file"));
                            ?>
                            <?php echo $this->Form->end(__('Submit')); ?>
                            <hr/>
                            <video id="video" width="640" height="480" autoplay></video>
                            <button id="snap">Snap photo</button>
                            <button id="repeat">Snap again</button>
                            <button id="send">to image</button>
                            <canvas id="canvas" width="640" height="480" style="display:none;">Snap photo</canvas>
                            <script>
                                // Put event listeners into place
                                $(function() {
                                    // Grab elements, create settings, etc.
                                    var canvas = document.getElementById("canvas"),
                                            context = canvas.getContext("2d"),
                                            video = document.getElementById("video"),
                                            videoObj = {"video": true},
                                    errBack = function(error) {
                                        console.log("Video capture error: ", error.code);
                                    };
                                    // Put video listeners into place
                                    if (navigator.getUserMedia) { // Standard
                                        navigator.getUserMedia(videoObj, function(stream) {
                                            video.src = stream;
                                            video.play();
                                        }, errBack);
                                    } else if (navigator.mozGetUserMedia) { // WebKit-prefixed
                                        navigator.mozGetUserMedia(videoObj, function(stream) {
                                            video.mozSrcObject = stream;
                                            video.play();
                                            document.getElementById("snap").addEventListener("click", function() {
                                                context.drawImage(video, 0, 0, 640, 480);
                                                video.pause();
                                            });
                                            document.getElementById("repeat").addEventListener("click", function() {
                                                video.play();
                                            });
                                            document.getElementById("send").addEventListener("click", function() {
                                                var data = canvas.toDataURL();
                                                console.log(data);
                                                var ur = '<?php echo $this->webroot; ?>usermgmt/users/save_capture';
                                                $.post(ur, {raw: data}, function(cb) {
                                                    if (cb == 'ok') {
                                                        window.location.reload(true);
                                                    } else {
                                                        alert(cb);
                                                    }
                                                });
                                            });
                                        }, errBack);
                                    } else if (navigator.webkitGetUserMedia) { // WebKit-prefixed
                                        navigator.webkitGetUserMedia(videoObj, function(stream) {
                                            video.src = window.webkitURL.createObjectURL(stream);
                                            video.play();
                                        }, errBack);
                                    } else {
                                        alert("this application runs on only Firefox 21+ and Google Chrome 21+");
                                    }

                                    // Trigger photo take
                                    /*
                                     document.getElementById("snap").addEventListener("click", function() {
                                     context.drawImage(video, 0, 0, 640, 480);
                                     });
                                     */
                                });

                            </script>
                        </div>
                    </div>
                </div>
            </div> <!-- /widget-content -->
        </div> <!-- /widget -->
    </div> <!-- /span8 -->
    <div class="col-md-4">
        <div class="well">
            <!--            <h4>Extra Info</h4>
                        <ul class="nav nav-tabs" id="myTab">
                            <li class=""><a href="#charts"><i class="icon-check"></i></a></li>
                            <li ><a href="#users"><i class="icon-glass"></i></a></li>
                            <li class="active"><a href="#messages"><i class="icon-envelope"></i></a></li>
                            <li class=""><a id="close-widgets-area" href="#"><i class="icon-signin"></i></a></li>
                        </ul>

                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane" id="charts">

                                <div class="bar-stat">
                                    <span class="title">Account balance</span>
                                    <span class="value">$19 999,99</span>
                                    <span class="chart green"><canvas width="68" height="40" style="display: inline-block; width: 68px; height: 40px; vertical-align: top;"></canvas></span>
                                </div>

                                <hr>

                                <div class="bar-stat">
                                    <span class="title">Clients</span>
                                    <span class="value">1278</span>
                                    <span class="chart yellow"><canvas width="68" height="40" style="display: inline-block; width: 68px; height: 40px; vertical-align: top;"></canvas></span>
                                </div>

                                <hr>

                                <div class="bar-stat">
                                    <span class="title">Orders</span>
                                    <span class="value">5876</span>
                                    <span class="chart blue"><canvas width="68" height="40" style="display: inline-block; width: 68px; height: 40px; vertical-align: top;"></canvas></span>
                                </div>

                                <hr>

                                <div class="bar-stat">
                                    <span class="title">Messages</span>
                                    <span class="value">673</span>
                                    <span class="chart red"><canvas width="68" height="40" style="display: inline-block; width: 68px; height: 40px; vertical-align: top;"></canvas></span>
                                </div>

                            </div>
                            <div class="tab-pane active" id="users">

                                <ul class="users-list">
                                    <li>
                                        <a href="widgets.html#">
                                            <span class="status active"></span>
                                            <span class="avatar"><img class="img-circle" src="assets/img/avatar.jpg" alt="Avatar"></span>
                                            <span class="name">Łukasz Holeczek</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="widgets.html#">
                                            <span class="status busy"></span>
                                            <span class="avatar"><img class="img-circle" src="assets/img/avatar2.jpg" alt="Avatar"></span>
                                            <span class="name">Megan Abott</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="widgets.html#">
                                            <span class="status disable"></span>
                                            <span class="avatar"><img class="img-circle" src="assets/img/avatar3.jpg" alt="Avatar"></span>
                                            <span class="name">Kate Ross</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="widgets.html#">
                                            <span class="status active"></span>
                                            <span class="avatar"><img class="img-circle" src="assets/img/avatar4.jpg" alt="Avatar"></span>
                                            <span class="name">Julie Blank</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="widgets.html#">
                                            <span class="status"></span>
                                            <span class="avatar"><img class="img-circle" src="assets/img/avatar5.jpg" alt="Avatar"></span>
                                            <span class="name">Jane Sanders</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="widgets.html#">View all users</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="tab-pane" id="messages">

                                <ul class="messages-list">
                                    <li>
                                        <a href="widgets.html#">
                                            <div class="avatar"><img class="img-circle" src="assets/img/avatar.jpg" alt="Avatar"></div>
                                            <span class="name">Łukasz Holeczek</span>
                                            <span class="date">25/6/2013</span>
                                            <span class="title">Custom Bootstrap design for new client</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="widgets.html#">
                                            <div class="avatar"><img class="img-circle" src="assets/img/avatar2.jpg" alt="Avatar"></div>
                                            <span class="name">Megan Abott</span>
                                            <span class="date">25/6/2013</span>
                                            <span class="title">Custom Bootstrap design for new client</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="widgets.html#">
                                            <div class="avatar"><img class="img-circle" src="assets/img/avatar3.jpg" alt="Avatar"></div>
                                            <span class="name">Kate Ross</span>
                                            <span class="date">25/6/2013</span>
                                            <span class="title">Custom Bootstrap design for new client</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="widgets.html#">
                                            <div class="avatar"><img class="img-circle" src="assets/img/avatar4.jpg" alt="Avatar"></div>
                                            <span class="name">Julie Blank</span>
                                            <span class="date">25/6/2013</span>
                                            <span class="title">Custom Bootstrap design for new client</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="widgets.html#">
                                            <div class="avatar"><img class="img-circle" src="assets/img/avatar5.jpg" alt="Avatar"></div>
                                            <span class="name">Jane Sanders</span>
                                            <span class="date">25/6/2013</span>
                                            <span class="title">Custom Bootstrap design for new client</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="widgets.html#">View all messages</a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="bs-example">
                            <ul id="myTab" class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                                <li class=""><a href="#profile" data-toggle="tab">Profile</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#dropdown1" tabindex="-1" data-toggle="tab">@fat</a></li>
                                        <li class=""><a href="#dropdown2" tabindex="-1" data-toggle="tab">@mdo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <strong>Home</strong>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <strong>Profile</strong>
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                                </div>
                                <div class="tab-pane fade" id="dropdown1">
                                    <strong>@fat</strong>
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                                </div>
                                <div class="tab-pane fade" id="dropdown2">
                                    <strong>@mdo</strong>
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                                </div>
                            </div>
                        </div>-->
        </div><!-- /well -->
    </div> <!-- /span4 -->
</div> <!-- /row -->
</div>