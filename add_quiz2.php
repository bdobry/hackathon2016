<?php echo file_get_contents("head.php"); ?>
<?php echo file_get_contents("header.php");?>
  
	
   <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron fp-jt">
            <h1>Edit Quiz</h1>
          <div class="col-sm-6 col-md-6 text-right">
              
                <div class="btn-group inline" role="group">
                    
                    <a href="manage2.php" class="btn btn-danger">Go back</a>
                   
                </div>
                </div>
        </header>

        <hr>

        <!--Quiz -->
        <div class="row">
        
            <div class="col-lg-12">

<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h1>Add Quiz</h1>
        <form action="createquiz2.php" method="post">
            <div class="form-group">
                <label for="question">Ask Question</label>
                <input type="text" class="form-control" id="question" name="question" placeholder="Enter your question here">
            </div>
            <div class="form-group">
                <label for="correct_answer">Correct answer</label>
                <input type="text" class="form-control" id="correct_answer" name="correct_answer" placeholder="Enter the correct answer here">
            </div>
            <div class="form-group">
                <label for="wrong_answer1">Wrong Answers</label>
                <input type="text" class="form-control" id="wrong_answer1" name="wrong_answer1" placeholder="Wrong answer 1">
            </div>
            <div class="form-group">
                <label class="sr-only" for="wrong_answer2">Wrong Answers 2</label>
                <input type="text" class="form-control" id="wrong_answer2" name="wrong_answer2" placeholder="Wrong answer 2">
            </div>
            <div class="form-group">
                <label class="sr-only" for="wrong_answer3">Wrong Answers 2</label>
                <input type="text" class="form-control" id="wrong_answer3" name="wrong_answer3" placeholder="Wrong answer 3">
            </div>
            <button type="submit" class="btn btn-primary btn-large" value="submit" name="submit">Add Question</button>

        </form>
    </div>
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
