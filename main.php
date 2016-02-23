<?php
$username = "Stranger";
if(isset($_COOKIE["user"])){
	$username = $_COOKIE["user"];
}
?>

<div class="container">
	<?php 
	echo file_get_contents("head.php");
	?>
	<?php 
	echo file_get_contents("header.php");
	?>
	
	
	<h1>Hello <?php echo ($username);?>!</h1>
	
	<?php
	echo file_get_contents("pagefooter.php");
	?>
	<?php
	echo file_get_contents("footer.php");
	?>
</div>
