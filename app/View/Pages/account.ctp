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
						<li><a href="#settings" data-toggle="tab">Settings</a></li>
					</ul>
					<br>
					<div class="tab-content">
						<div class="tab-pane active" id="profile">
							<form id="edit-profile" class="form-horizontal col-md-8">
								<fieldset>
									<div class="form-group">											
										<label for="username" class="col-md-4">Username</label>
										<div class="col-md-8">
											<input class="form-control" id="username" value="jumpstartui" disabled="" type="text">
											<p class="help-block">Your username is for logging in and cannot be changed.</p>
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									<div class="form-group">											
										<label for="firstname" class="col-md-4">First Name</label>
										<div class="col-md-8">
											<input class="form-control" id="firstname" value="Rod" type="text">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									<div class="form-group">											
										<label class="col-md-4" for="lastname">Last Name</label>
										<div class="col-md-8">
											<input class="form-control" id="lastname" value="Howard" type="text">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									<div class="form-group">											
										<label class="col-md-4" for="email">Email Address</label>
										<div class="col-md-8">
											<input class="form-control" id="email" value="rod.howard@example.com" type="text">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									<hr><br>
									<div class="form-group">											
										<label class="col-md-4" for="password1">Password</label>
										<div class="col-md-8">
											<input class="form-control" id="password1" value="password" type="password">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									<div class="form-group">											
										<label class="col-md-4" for="password2">Confirm</label>
										<div class="col-md-8">
											<input class="form-control" id="password2" value="password" type="password">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									<br>
									<div class="form-group">
										<div class="col-md-offset-4 col-md-8">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn btn-default">Cancel</button>
										</div>
									</div> <!-- /form-actions -->
								</fieldset>
							</form>
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
					</div>
				</div>
			</div> <!-- /widget-content -->
		</div> <!-- /widget -->
	</div> <!-- /span8 -->
	<div class="col-md-4">
		<div class="well">
			<h4>Extra Info</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div> <!-- /span4 -->
</div> <!-- /row -->
