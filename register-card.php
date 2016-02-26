<div class="login-card">
	<h3>Register</h3>
	<form id="registerForm" action="register.php" method="post">
		<div class="form-group">
			<label for="regUsername">Username</label>
			<input type="text" class="form-control" id="regUsername" name="regUsername" placeholder="Username" required>
		</div>
		<div class="form-group">
			<label for="regUsername">Password</label>
			<input type="password" class="form-control" name="regPass" id="regPass" placeholder="Password" required>
		</div>
      <div class="form-group">
        <label for="regEmail">Your Email</label>
          <input type="email" class="form-control" id="regEmail" name="regEmail" placeholder="Enter Email" required>
      </div>
		<div class="form-group">
			<input type="submit" name="register" class="btn btn-success form-control login login-submit" value="Register">
		</div>
	</form>
	<div class="login-help">
	<?php if(isset($_COOKIE["user"]))
	{
		setcookie ("User", "", time() - 3600);
		echo("Already a user named ".$_COOKIE["user"]); 
	}?>
	</div>
</div>