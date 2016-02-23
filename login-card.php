
	<h2>Log in</h2>	
	<form action="login.php" method="post" class="login-form">
	
		<div class="form-group">
			<label for="Username">Username</label>
			<input type="text" class="form-control" name="user" placeholder="Username">
		</div>
	
		<div class="form-group">
			<label for="Password">Password</label>
			<input type="password" class="form-control" name="pass" placeholder="Password">
		</div>
		<div class="form-group">
			<input type="submit" name="login" class="form-control btn btn-success login login-submit" value="Log in">
		</div>
	</form>
	
	<form class="register-form" action="registerpage.php">
		<div class="form-group">
			<input type="submit" class="form-control btn btn-primary login login-submit" value="Register">
			<label for="No-account">Don't have an account? Register here!</label>
		</div>
	</form>
	<div class="login-help">
		<?php if(isset($_COOKIE["user"]))
		{
			setcookie ("User", "", time() - 3600);
			echo("No user named ".$_COOKIE["user"]); 
		}?>
	</div>


	