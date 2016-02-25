<?php
session_start();
if(!isset($_SESSION["isAuthenticated"]) || !$_SESSION["isAuthenticated"]){
    header("location: /hackathon2016/index.php");
    exit;
}
?>
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
        <form action="editProfile.php" method="post">
        <div class="form-group">
            <label for="user">Change username</label>
            <input type="text" class="form-control" name="user" placeholder="<?php echo $_SESSION["userName"] ?>">
        </div>
        <div class="form-group">
        <label for="email">Change Email</label>
          <input type="email" class="form-control" id="InputEmail" name="email" placeholder="<?php echo $_SESSION["email"] ?>" required>
        </div>
        <div class="form-group">
            <label for="oldPass">Current Password</label>
            <input type="password" class="form-control" name="oldPass" placeholder="Current Password">
        </div>
        <div class="form-group">
            <label for="newPass1">New Password</label>
            <input type="password" class="form-control" name="newPass1" placeholder="New Password">
        </div>
        <div class="form-group">
            <label for="newPass2">Repeat New Password</label>
            <input type="password" class="form-control" name="newPass2" placeholder="Repeat New Password">
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
