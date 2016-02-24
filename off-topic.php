	<?php 
	echo file_get_contents("head.php");
	?>
	<?php 
	echo file_get_contents("header.php");
	?>
	
<    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron fp-jt">
            <h1>Off topic questions</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <h3 class="no-mg-top">Questions</h3>
                </div>
                <div class="col-sm-6 col-md-6 text-right">
                <span class="inline">Sort by: </span>
                <div class="btn-group inline" role="group" aria-label="filter">
                    
                    <a href="#" class="btn btn-primary">Newest</a>
                    <a href="#" class="btn btn-danger">Highest rated</a>
                    <a href="#" class="btn btn-success">Most replies</a>
                </div>
                </div>
            <div class="question-container col-sm-12"></div>
        </div>

        
	<?php
	echo file_get_contents("pagefooter.php");
	?>

	<?php
	echo file_get_contents("footer.php");
	?>
