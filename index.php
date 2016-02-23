	<?php 
	echo file_get_contents("head.php");
	?>

<img src="images/blue-bg.jpg" alt="Background image" class="bg">
	<div class="container">
		<header class="col-sm-12"><img class="img-responsive center-block lp-logo" src="http://placehold.it/200x200" alt=""></header>
		<h1 class="whitetxt text-center">Welcome to Classmate</h1>
		<p class="whitetxt text-center">Classmate is a student-driven community, made by students - for students</p>
		<div class="col-sm-12 lp-forms center-block">
			<?php
			echo file_get_contents("login-card.php");
			?>
		</div>

	</div>
	<?php
	echo file_get_contents("footer.php");
	?>