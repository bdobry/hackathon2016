<?php

include "config.php";

if(isset($_POST['formSubmit'])){
    /* variables for question section */



    $text = $_POST['formText'];
    $author= $_SESSION['userName'];
    $date= date('Y-m-d');
    $q_id= $_POST['q_id'];
    $sql = "INSERT INTO `r_answer`(`text`, `q_id`, `author`, `date`) VALUES ('$text', '$q_id', '$author','$date')";

    $result = $dbc->query($sql);



    header( "location: ranswer.php?id=".$_POST["q_id"]);

} else {
    echo "Something went wrong! please try again.";
}





?>