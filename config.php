<?php
//error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
$dbhost_name = "mysql15.unoeuro.com";
$database = "classmate_dk_db";
$username = "classmate_dk";
$password = "classmate2016";

//connection//

try {
	$dbo = new PDO ('mysql:host=localhost;dbname='.$database,$username,$password);
} catch (PDOException $e) {
	print "Error!:" . $e->getMessage(). "<br/>";
	die();
	
	}
?>
