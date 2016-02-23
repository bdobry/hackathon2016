<?php
if(isset($_POST["user"]) && isset($_POST["pass"])){
	setcookie("user", $_POST["user"]);
	
	$filecontent = file_get_contents("users");
	
	$userlist = json_decode($filecontent, true);
	
	if(is_array($userlist)){
		foreach ($userlist as $user){
			if($_POST["user"] == $user["user"] && $_POST["pass"] == $user["pass"]){
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