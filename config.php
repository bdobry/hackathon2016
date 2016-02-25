<?php 

//Set the database access information as constants
DEFINE ('DB_USER', 'classmate_dk');
DEFINE ('DB_PASSWORD', 'classmate2016');
DEFINE ('DB_HOST', 'mysql15.unoeuro.com');
DEFINE ('DB_NAME', 'classmate_dk_db');

@ $dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (mysqli_connect_error()){
	echo "Could not connect to MySql. Please try again";
	exit();
}

?>

	<!-- Tjecking for user logged in -->

<?php
session_start();
if(!isset($_SESSION["isAuthenticated"]) || !$_SESSION["isAuthenticated"]){
	header("location: /hackathon2016/index.php");
	exit;
}
?>