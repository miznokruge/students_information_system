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
echo $this->Common->flash();
?>
<div class="row">
    <div class="col-md-6">
        <div class="account-container">
            <div class="content clearfix">
                <?php echo $this->Form->create('User', array('action' => 'login')); ?>
                <h1>Sign In</h1>
                <div class="login-fields">
                    <p>Sign in using your registered account:</p>
                    <div class="field">
                        <label for="username">Username:</label>
                        <input id="username" name="data[User][email]" value="" placeholder="Email" class="form-control input-lg username-field" type="text">
                    </div> <!-- /field -->
                    <div class="field">
                        <label for="password">Password:</label>
                        <input id="password" name="data[User][password]" value="" placeholder="Password" class="form-control input-lg password-field" type="password">
                    </div> <!-- /password -->
                </div> <!-- /login-fields -->
                <div class="login-actions">
                    <span class="login-checkbox">
                        <input id="Field" name="Field" class="field login-checkbox" value="First Choice" tabindex="4" type="checkbox">
                        <label class="choice" for="Field">Keep me signed in</label>
                    </span>
                    <button class="login-action btn btn-primary">Sign In</button>
                </div> <!-- .actions -->
                <div class="login-social">
                    <p>Sign in using social network:</p>
                    <div class="twitter">
                        <a href="#" class="btn_1">Login with Twitter</a>
                    </div>
                    <div class="fb">
                        <a href="#" class="btn_2">Login with Facebook</a>
                    </div>
                </div>
                <?php echo $this->Html->link(__("Forgot Password?", true), "/forgotPassword", array("class" => "col-md-6")) ?>
                <?php echo $this->Html->link(__("Email Verification", true), "/emailVerification", array("class" => "col-md-6")) ?>
                <?php echo $this->Form->end(); ?>
            </div> <!--/content -->
            <div style="text-align:center;height:20px; margin:10px auto 30px auto;">
                Not a member? <?php echo $this->Html->link(__("Free Sign Up", true), "/register") ?>
            </div>
        </div> <!--/account-container -->
    </div>
    <div class="col-md-6">
        <div id="lala">
            <?php echo $this->Html->image('slides/a.png', array("class" => "c-image")); ?>
            <?php echo $this->Html->image('slides/b.jpg', array("class" => "c-image")); ?>
            <?php echo $this->Html->image('slides/c.jpg', array("class" => "c-image")); ?>
        </div>
        <div id="slider_pager">
            <a href="#" id="prev"><span>Prev</span></a>
            <a href="#" id="next"><span>Next</span></a>
            <ul id="nav"></ul>
        </div>
        <style>
            #slider_pager{
                text-align:center;
                margin:auto;
                width:556px;
                position: absolute;
                z-index: 20000;
            }
            #slider_pager ul#nav{
                margin-top: -70px;
                float: right;
            }
            #slider_pager ul#nav li{
                list-style: none;
                float:left;
                margin-right: 5px;
                padding:3px 10px;
                -moz-border-radius:15px;
                border-radius: 15px;
                -webkit-border-radius: 15px;
                background: #CCC;
                border:0;
            }

            #slider_pager ul#nav li.activeSlide{
                background: #f00;
                font-weight: bold;
                color:#fff !important;
            }

            #slider_pager a#prev,#slider_pager a#next{
                margin-top:-200px;
                background: #fff;
                padding:5px 10px;
            }
            #slider_pager a#prev{
                float: left;
                -webkit-border-top-right-radius: 5px;
                -webkit-border-bottom-right-radius: 5px;
                -moz-border-radius-topright: 5px;
                -moz-border-radius-bottomright: 5px;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
            }
            #slider_pager a#next{
                float: right;
                -webkit-border-top-left-radius: 5px;
                -webkit-border-bottom-left-radius: 5px;
                -moz-border-radius-topleft: 5px;
                -moz-border-radius-bottomleft: 5px;
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;
            }
            #lala{
                margin: 5px auto;
                -moz-border-radius:5px;
                border-radius: 5px;
                -webkit-border-radius: 5px;
                margin-bottom: 20px;
            }
            .c-image{
                width:100%;
                height: 400px;
                -moz-border-radius:5px;
                border-radius: 5px;
                -webkit-border-radius: 5px;
            }
        </style>
        <script>
            $(function() {
                $('#lala').cycle({
                    speed: 1000,
                    delay: 300,
                    fx: 'fade',
                    timeout: 0,
                    prev: '#prev',
                    next: '#next',
                    pager: '#nav',
                    pagerAnchorBuilder: pagerFactory
                });
                function pagerFactory(idx, slide) {
                    var s = idx > 2 ? ' style="display:none"' : '';
                    return '<li' + s + '><a href="#">' + (idx + 1) + '</a></li>';
                }
                ;

            });
        </script>
    </div>

</div>
