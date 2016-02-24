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
	
<div class="container">	
<div class="row">
<div class="col-md-12">
	<h1>Hello <?php echo ($username);?>!</h1>
</div>
	<div class="col-sm-12">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut magni, earum. Enim provident odit, adipisci nesciunt itaque et rem nemo officia maiores dicta cupiditate debitis optio voluptates eveniet expedita earum.</p>
	</div>
	<div class="col-sm-12">
		<p>Incidunt quasi deserunt quidem assumenda ullam modi minima quo deleniti. Voluptate molestiae error cupiditate consectetur quae necessitatibus soluta, ea iste aut quasi, vero magni ducimus praesentium tenetur blanditiis adipisci pariatur.</p>
	</div>
	<div class="col-sm-12">
		<p>Ipsa optio voluptates, quia quo numquam beatae obcaecati nemo nam magnam, ipsum, et quisquam dicta harum id sint sapiente nesciunt vitae porro consequatur dolorem assumenda. Nulla quaerat distinctio ea dicta?</p>
	</div>
</div>	
	<?php
	echo file_get_contents("pagefooter.php");
	?>
	<?php
	echo file_get_contents("footer.php");
	?>
