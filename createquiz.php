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
    echo "Please complete all fields";
    exit();
}

//Create short variables
$question = $_POST['question'];
$correct_answer = ($_POST['correct_answer']);
$wrong_answer1 = ($_POST['wrong_answer1']);
$wrong_answer2 = ($_POST['wrong_answer2']);
$wrong_answer3 = ($_POST['wrong_answer3']);

//connect to the database
require_once('createdb.php');

//Create the insert query
$query = "INSERT INTO quiz
			-- (questionid, name, choice1, choice2, choice3, answer)
			 VALUES (NULL, '".$question."','".$wrong_answer1."','".$wrong_answer2."','".$wrong_answer3."','".$correct_answer."')";

$result = $dbc->query($query);

if($result){
    echo "Your quiz has been saved";
} else {
    echo '<h1>System Error</h1>';
}
$dbc->close();



?>

