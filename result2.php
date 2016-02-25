<?php include "db_conn.php"; ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);
$rightAnswer = 0;
$wrongAnswer = 0;


require_once('functions.php');
require_once('setting2.php');


if (isset($_POST['submit'])){
  foreach($_POST['response'] as $key => $value){
      if($correctAnswerArray[$key] == $value){
          $rightAnswer++;
      } else {
          $wrongAnswer++;
      }
  }
}
?>



<!-- //Display result-->
<h1> CONGRATULATIONS! </h1>
<h2>You have :</h2>

    <?php
       if ($rightAnswer > 0){ ?>
           <h2><span class="label label-success"> <?php echo $rightAnswer; ?> correct answers</span></h2>
           <?php }
        if ($wrongAnswer > 0) { ?>
           <h2><span class="label label-danger"><?php echo $wrongAnswer; ?> wrong answers</span></h2>
           <?php
        }
     ?>


</body>
</html>