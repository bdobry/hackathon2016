<?php include "db_conn.php"; ?>


<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);
$rightAnswer = 0;
$wrongAnswer = 0;


require_once('functions.php');
require_once('setting.php');


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



	<?php 
	echo file_get_contents("head.php");
	?>
	<?php 
	echo file_get_contents("header.php");
	?>
    
     <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron fp-jt">
            <h1>Congratulations!</h1>
          <div class="col-sm-6 col-md-6 text-right">
              
                <div class="btn-group inline" role="group">
                    
                 
                    <a href="quiz.php" class="btn btn-danger">Try again</a>

                   
                </div>
                </div>
        </header>

        <hr>

        <!--Quiz -->
        <div class="row">
        
            <div class="col-lg-12">


<!-- //Display result-->

<h2>You had :</h2>

    <?php
       if ($rightAnswer > 0){ ?>
           <h2><span class="label label-success"> <?php echo $rightAnswer; ?> correct answers</span></h2>
           <?php }
        if ($wrongAnswer > 0) { ?>
           <h2><span class="label label-danger"><?php echo $wrongAnswer; ?> wrong answers</span></h2>
           <?php
        }
     ?>

</div>


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
