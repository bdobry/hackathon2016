<div class="login-card">
	<h3>Register</h3>
	<form action="register.php" method="post">
		<div class="form-group">
			<label for="Username">Username</label>
			<input type="text" class="form-control" name="user" placeholder="Username">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" name="pass" placeholder="Password">
		</div>
      <div class="form-group">
        <label for="InputEmail">Your Email</label>
          <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Enter Email" required>
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
