
	<?php 
	echo file_get_contents("head.php");
	?>
	<?php 
	echo file_get_contents("header.php");
	?>
	
<div class="container">

        <!-- Jumbotron Header -->
    <header class="jumbotron fp-jt">
        <h1>Edit profile</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
    </header>

    <hr>
    <div class="col-lg-6">
        <form action="register.php" method="post">
        <div class="form-group">
            <label for="Username">Change username</label>
            <input type="text" class="form-control" name="user" placeholder="New Username">
        </div>
        <div class="form-group">
        <label for="InputEmail">Change Email</label>
          <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="New Email" required>
        </div>
        <div class="form-group">
            <label for="password">Current Password</label>
            <input type="password" class="form-control" name="pass" placeholder="Current Password">
        </div>
        <div class="form-group">
            <label for="password">New Password</label>
            <input type="password" class="form-control" name="pass" placeholder="New Password">
        </div>
        <div class="form-group">
            <label for="password">Repeat New Password</label>
            <input type="password" class="form-control" name="pass" placeholder="Repeat New Password">
        </div>
        <div class="form-group">
            <input type="submit" name="register" class="btn btn-success login login-submit" value="Save changes">
        </div>
        </form>    
    </div>

</div>

        <!-- Footer -->
	<?php
	echo file_get_contents("pagefooter.php");
	?>

	<?php
	echo file_get_contents("footer.php");
	?>
