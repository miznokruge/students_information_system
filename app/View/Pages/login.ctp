<div class="account-container stacked">
    <div class="content clearfix">
        <?php echo $this->Form->create("User"); ?>
        <h1>Sign In</h1>
        <div class="login-fields">
            <p>Sign in using your registered account:</p>
            <div class="field">
                <label for="username">Username:</label>
                <input id="username" name="data[User][username]" value="" placeholder="Username" class="form-control input-lg username-field" type="text">
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
        <?php echo $this->Form->end(); ?>
    </div> <!--/content -->
</div> <!--/account-container -->