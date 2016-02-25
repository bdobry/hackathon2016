<?php


error_reporting(-1);
ini_set('display_errors', 'On');

//Check for empty fields
if(empty($_POST['title'])		||
    empty($_POST['author']))
{

    echo "Please complete all fields";
    exit();
}

//Create short variables

$title = $_POST['title'];
$author = $_POST['author'];



//connect to the database
require_once('createdb.php');

//Create the insert query
$query = "INSERT INTO `quiz_base`(`title`,`author` ) VALUES ('".$title."','".$author."') ";



			

$result = $dbc->query($query);


if($result){
    echo "Your quiz has been saved";
} else {
    echo '<h1>System Error</h1>';
}
$dbc->close();



?>

