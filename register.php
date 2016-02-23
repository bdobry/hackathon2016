<?php
if(isset($_POST["user"]) && isset($_POST["pass"])
		&& $_POST["user"]!=""){
	
	$filecontent = file_get_contents("users");
	
	$userlist = json_decode($filecontent, true);
	
	if(is_array($userlist)){
		foreach ($userlist as $user){
			if($_POST["user"] == $user["user"]){
				setcookie("user", $_POST["user"]);
				fclose($filehandle);
				header("Location: registerpage.php");
				exit();
			}
		}
		
		array_push($userlist, array("user"=>$_POST["user"], "pass" => $_POST["pass"]));
	}
	else{
		$userlist = array("user"=>$_POST["user"], "pass" => $_POST["pass"]);
	}

	$filehandle = fopen("users","w");
	fwrite($filehandle, json_encode($userlist));
	fclose($filehandle);
	
	/*$filehandle = fopen("users","r");
	
	if($filehandle){
		$line;
		
		while($line = fgets($filehandle)){
			$line = trim(explode("=",$line)[0]);
			
			if($line == $_POST["user"]){
				setcookie("user", $_POST["user"]);
				fclose($filehandle);
				header("Location: registerpage.php");
				exit();
			}
		}
		
		fclose($filehandle);
	}
	//user does not already exist
	$filehandle = fopen("users","a");
	fwrite($filehandle, PHP_EOL.$_POST["user"]."=".$_POST["pass"]);
	fclose($filehandle);*/

	header("Location: index.php");
	exit();
}
else{
	header("Location: registerpage.php");
	exit();
}
?>