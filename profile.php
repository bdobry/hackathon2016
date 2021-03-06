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
        <form action="editProfile.php" method="post" name="editProfileForm" id="editProfileForm">
        <div class="form-group">
            <label for="user">Change username</label>
            <input id="user" type="text" class="form-control" name="user" placeholder="<?php echo $_SESSION["userName"] ?>">
        </div>
        <div class="form-group">
        <label for="email">Change Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $_SESSION["email"] ?>">
        </div>
        <div class="form-group">
            <label for="oldPass">Current Password</label>
            <input id="oldPass" type="password" class="form-control" name="oldPass" placeholder="Current Password">
        </div>
        <div class="form-group">
            <label for="newPass1">New Password</label>
            <input id="newPass1" type="password" class="form-control" name="newPass1" placeholder="New Password">
        </div>
        <div class="form-group">
            <label for="newPass2">Repeat New Password</label>
            <input id="newPass2" type="password" class="form-control" name="newPass2" placeholder="Repeat New Password">
        </div>
        <div>
            <p class="alert alert-danger" name="passError" hidden>The New Password field needs to match the Repeat New Password field</p>
        </div>
        <div class="form-group">
            <div onclick="submit()" class="btn btn-success login login-submit">Save changes</div>
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

<script type="application/javascript">

    var submit = function () {

        var rdyToSubmit = true;

        var oldPass = document.getElementsByName("oldPass");
        var newPass1 = document.getElementsByName("newPass1");
        var newPass2 = document.getElementsByName("newPass2");
        var errorMessage = document.getElementsByName("passError");

        if (newPass1[0].value == newPass2[0].value) {
            //todo check old password on server


        }
        else{
            console.log(errorMessage);
            errorMessage[0].removeAttribute("hidden");
            rdyToSubmit = false;
        }


        if(rdyToSubmit){
            document.getElementsByName("editProfileForm")[0].submit();
        }

    };


</script>