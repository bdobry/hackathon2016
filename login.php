<?php
// Start the session
session_start();
?>
<?php
if(isset($_POST["user"]) && isset($_POST["pass"])){
	
	$filecontent = file_get_contents("users");
	
	$userlist = json_decode($filecontent, true);
	
	if(is_array($userlist)){
		foreach ($userlist as $user){
			if($_POST["user"] == $user["user"] && $_POST["pass"] == $user["pass"]){
				$_SESSION["userId"] = $user["id"];
				$_SESSION["userName"] = $user["user"];
				$_SESSION["isTeacher"] = $user["isTeacher"];
				$_SESSION["isAuthenticated"] = true;

				fclose($filehandle);
				header("Location: main.php");
				exit();
			}
		}
	}

	header("Location: index.php");
	exit();
}
else{
	header("Location: index.php");
	exit();
}
?>