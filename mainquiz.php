
	<?php 
	echo file_get_contents("head.php");
	?>
	<?php 
	echo file_get_contents("header.php");
	?>
	
   <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron fp-jt">
            <h1>Quizzes</h1>
            <p>Prepare for exam by solving chosen quiz.</p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Categories</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-4 col-sm-6 feature">
                <div class="thumbnail">
					<a href="quiz.php">
						<div class="col-sm-12 categoryiconwrap">
		                    <i class="fa fa-code fa-5x"></i>
		                </div>
		             </a>
                    <div class="caption">
                        <h3>PHP Quiz</h3>
                        <p>Check your knowledge of PHP</p>
                        <p>
                            <a href="quiz.php" class="btn btn-success">Start quiz</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 feature">
                <div class="thumbnail">
                <a href="quiz2.php">
                    <div class="col-sm-12 categoryiconwrap">
	                    <i class="fa fa-pencil fa-5x"></i>
	                </div>
	            </a>
                    <div class="caption">
                        <h3>Photoshop quiz</h3>
                        <p>Check your knowledge of Photoshop</p>
                        <p>
                            <a href="quiz2.php" class="btn btn-success">Start quiz</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 feature">
                <div class="thumbnail">
                <a href="quiz2.php">
	                <div class="col-sm-12 categoryiconwrap">
	                    <i class="fa fa-desktop fa-5x"></i>
	                </div>
	            </a>
                    <div class="caption">
                        <h3>UX/UI</h3>
                        <p>Check your knowledge in design</p>
                        <p>
                            <a href="quiz2.php" class="btn btn-success">Start quiz</a>
                        </p>
                    </div>
                </div>
            </div>

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
