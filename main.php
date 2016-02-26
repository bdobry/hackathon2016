<?php
    session_start();
    if(!isset($_SESSION["isAuthenticated"]) || !$_SESSION["isAuthenticated"]){
        header("location: /hackathon2016/index.php");
        exit;
    }
die("hest");
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
            <h1> Welcome to Classmate, <?php echo $_SESSION["userName"]; ?></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
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
					<a href="design.php" class="">
						<div class="col-sm-12 categoryiconwrap designcat designcatbg">
		                    <i class="fa fa-pencil fa-5x"></i>
		                </div>
		             </a>
                    <div class="caption">
                        <h3>Design</h3>
                        <p>Anything related to design</p>
                        <p>
                            <a href="design.php" class="btn btn-success">See questions</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 feature">
                <div class="thumbnail">
                <a href="code.php">
                    <div class="col-sm-12 categoryiconwrap codecat codecatbg">
	                    <i class="fa fa-code fa-5x"></i>
	                </div>
	            </a>
                    <div class="caption">
                        <h3>Coding</h3>
                        <p>Anything code/programming related</p>
                        <p>
                            <a href="code.php" class="btn btn-success">See questions</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 feature">
                <div class="thumbnail">
                <a href="off-topic.php">
	                <div class="col-sm-12 categoryiconwrap off-topiccat off-topiccatbg">
	                    <i class="fa fa-coffee fa-5x"></i>
	                </div>
	            </a>
                    <div class="caption">
                        <h3>Off topic</h3>
                        <p>Anything really</p>
                        <p>
                            <a href="off-topic.php" class="btn btn-success">See questions</a>
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
