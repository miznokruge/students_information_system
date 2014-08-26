<?php echo $this->Html->css('pages/signin');?>	
<div class="account-container register">
	<div class="content clearfix">
		<form action="./index.html" method="post">
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
				<div class="field">
					<label for="firstname">First Name:</label>
					<input id="firstname" name="firstname" value="" placeholder="First Name" class="form-control" type="text">
				</div> <!-- /field -->
				<div class="field">
					<label for="lastname">Last Name:</label>	
					<input id="lastname" name="lastname" value="" placeholder="Last Name" class="form-control" type="text">
				</div> <!-- /field -->
				<div class="field">
					<label for="email">Email Address:</label>
					<input id="email" name="email" value="" placeholder="Email" class="form-control" type="text">
				</div> <!-- /field -->
				<div class="field">
					<label for="password">Password:</label>
					<input id="password" name="password" value="" placeholder="Password" class="form-control" type="password">
				</div> <!-- /field -->
				<div class="field">
					<label for="confirm_password">Confirm Password:</label>
					<input id="confirm_password" name="confirm_password" value="" placeholder="Confirm Password" class="form-control" type="password">
				</div> <!-- /field -->
			</div> <!-- /login-fields -->
			<div class="login-actions">
				<span class="login-checkbox">
					<input id="Field" name="Field" class="field login-checkbox" value="First Choice" tabindex="4" type="checkbox">
					<label class="choice" for="Field">I have read and agree with the Terms of Use.</label>
				</span>
				<button class="login-action btn btn-primary">Register</button>
			</div> <!-- .actions -->
		</form>
	</div> <!-- /content -->
</div> <!-- /account-container -->
<!-- Text Under Box -->
<div class="login-extra">
	Already have an account? <a href="./login.html">Login</a>
</div> <!-- /login-extra -->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/libs/jquery-1.9.1.min.js"></script>
<script src="./js/libs/jquery-ui-1.10.0.custom.min.js"></script>
<script src="./js/libs/bootstrap.min.js"></script>
<script src="./js/Application.js"></script>
<script src="./js/demo/signin.js"></script>
<a style="display: none;" href="#top" id="back-to-top"><i class="icon-chevron-up"></i></a>