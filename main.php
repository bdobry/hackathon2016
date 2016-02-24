<?php
$username = "Stranger";
if(isset($_COOKIE["user"])){
	$username = $_COOKIE["user"];
}
?>

	<?php 
	echo file_get_contents("head.php");
	?>
	<?php 
	echo file_get_contents("header.php");
	?>
	
<    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron spacer">
            <h1>Welcome to Classmate</h1>
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
                    <div class="col-sm-12 categoryiconwrap">
	                    <i class="fa fa-pencil fa-5x"></i>
	                </div>
                    <div class="caption">
                        <h3>Styling</h3>
                        <p>CSS, LESS, Scss anything related to styling</p>
                        <p>
                            <a href="#" class="btn btn-success">See questions</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 feature">
                <div class="thumbnail">
                    <div class="col-sm-12 categoryiconwrap">
	                    <i class="fa fa-code fa-5x"></i>
	                </div>
                    <div class="caption">
                        <h3>Coding</h3>
                        <p>Anything code/programming related</p>
                        <p>
                            <a href="#" class="btn btn-success">See questions</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 feature">
                <div class="thumbnail">
	                <div class="col-sm-12 categoryiconwrap">
	                    <i class="fa fa-coffee fa-5x"></i>
	                </div>
                    <div class="caption">
                        <h3>Off topic</h3>
                        <p>Anything really</p>
                        <p>
                            <a href="#" class="btn btn-success">See questions</a>
                        </p>
                    </div>
                </div>
            </div>

        <!-- /.row -->

        <hr>

        <!-- Footer -->
	<?php
	echo file_get_contents("pagefooter.php");
	?>

    </div>

	<?php
	echo file_get_contents("footer.php");
	?>
