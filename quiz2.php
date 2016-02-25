
	<?php 
	echo file_get_contents("head.php");
	?>
	<?php 
	echo file_get_contents("header.php");
	?>
    <?php include "db_conn.php"; ?>
	
   <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron fp-jt">
            <h1>Photoshop</h1>
          <div class="col-sm-6 col-md-6 text-right">
              
                <div class="btn-group inline" role="group">
                    
                    <a href="mainquiz.php" class="btn btn-primary">Go back</a>
                    <a href="manage2.php" class="btn btn-danger">Edit quiz</a>
                   
                </div>
                </div>
        </header>

        <hr>

        <!--Quiz -->
        <div class="row">
        
            <div class="col-lg-12">

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



<!--Display form-->

<form action="result2.php" method="post">

    <?php
    foreach($questions as $id => $question) {
        echo "<div class=\"form-group\">";
        echo "<h4> $question</h4>"."<ol>";//display the question

        //Display multiple choices
        $randomChoices = $choices[$id];
        $randomChoices = shuffle_assoc($randomChoices);
        foreach ($randomChoices as $key => $values){
            echo '<li><input type="radio" name="response['.$id.'] id="'.$id.'" value="' .$values.'"/>';
        ?>
            <label for="question-<?php echo($id); ?>"><?php echo($values);?></label></li>
    <?php

        }
            echo("</ul>");
            echo("</div>");
        }
       ?>

    <input type="submit" name="submit" class="btn btn-primary" value="Submit Quiz" />
</form>





            </div>
        </div>
        <!-- /.row -->

        <!-- Quiz-->
       
        <!-- /.row -->

        <hr>
     </div>

        <!-- Footer -->
	<?php
	echo file_get_contents("pagefooter.php");
	?>

	<?php
	echo file_get_contents("footer.php");
	?>
