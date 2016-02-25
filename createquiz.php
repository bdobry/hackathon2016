<?php


error_reporting(-1);
ini_set('display_errors', 'On');

//Check for empty fields
if(empty($_POST['question'])||
    empty($_POST['correct_answer'])	||
    empty($_POST['wrong_answer1'])		||
    empty($_POST['wrong_answer2'])		||
    empty($_POST['wrong_answer3']))
{
    echo '<script>';
	echo 'alert("Please, fill all fields");';
    echo 'window.location = "add_quiz.php"';
    echo '</script>";';
    exit();
}

//Create short variables
$question = $_POST['question'];
$correct_answer = ($_POST['correct_answer']);
$wrong_answer1 = ($_POST['wrong_answer1']);
$wrong_answer2 = ($_POST['wrong_answer2']);
$wrong_answer3 = ($_POST['wrong_answer3']);

//connect to the database
require_once('db_conn.php');

//Create the insert query
$query = "INSERT INTO quiz
			-- (questionid, name, choice1, choice2, choice3, answer)
			 VALUES (NULL, '".$question."','".$wrong_answer1."','".$wrong_answer2."','".$wrong_answer3."','".$correct_answer."')";

$result = $dbc->query($query);

if($result){
   echo '<script>';
	echo 'alert("Your question was saved");';
    echo 'window.location = "manage.php"';
    echo '</script>";';
} else {
    echo '<script>';
	echo 'alert("Something went wrong, try again");';
    echo 'window.location = "add_quiz.php"';
    echo '</script>";';
}
$dbc->close();



?>

