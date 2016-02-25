<?php
// Start the session
session_start();

$fileContent = file_get_contents("users");

$userList = json_decode($fileContent, true);

$currentUser;
$otherUsers = array();

foreach ($userList as $user){
    if($user["id"] == $_SESSION["userId"]) {
        $currentUser = $user;
    }
    else{
        array_push($otherUsers, $user);
    }
}

if($currentUser != null){
    if(isset($_POST["user"]) && $_POST["user"] != ""){
        $currentUser["user"] = $_POST["user"];
        $_SESSION["userName"] = $currentUser["user"];
    }
    if(isset($_POST["newPass1"]) && $currentUser["pass"] == $_POST["oldPass"]){
        $currentUser["pass"] = $_POST["newPass1"];
    }
    if(isset($_POST["email"]) && $_POST["email"] != ""){
        $currentUser["email"] = $_POST["email"];
        $_SESSION["email"] = $currentUser["email"];
    }

    array_push($otherUsers, $currentUser);

    $filehandle = fopen("users","w");
    fwrite($filehandle, json_encode($otherUsers));
    fclose($filehandle);
}

?>

<div>
    <p>Changes are now saved</p>
    <p>You will be redirected to main page after 5 seconds</p>
</div>

<script type="application/javascript">
    setTimeout(function () {
        window.location.href= 'main.php'; // the redirect goes here

    },5000);
</script>
