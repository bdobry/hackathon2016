<?php
include 'config.php';

$username = "Stranger";
if(isset($_COOKIE["user"])){
	$username = $_COOKIE["user"];
}

	if(isset($_POST['formSubmit']) == "Submit")
    {
		$errorMessage = "";
		
		if(empty($_POST['formTitle'])) 
        {
			$errorMessage .= "<li>You forgot to enter a title!</li>";
		}
		if(empty($_POST['formQuestion'])) 
        {
			$errorMessage .= "<li>You forgot to enter a question!</li>";
		}
	

        $varTitle = $_POST['formTitle'];
		$varQuestion = $_POST['formQuestion'];
	

		if(empty($errorMessage)) 
        {
			

			$sql = "INSERT INTO questions (title, question) VALUES (".
							PrepSQL($varTitle) . ", " .
							
							PrepSQL($varQuestion) . ")";
			$result = $dbc->query($sql);
			
			header("Location: main.php");
			exit();
		}
	}
       
    // function: PrepSQL()
    // use stripslashes and mysql_real_escape_string PHP functions
    // to sanitize a string for use in an SQL query
    //
    // also puts single quotes around the string
    //
    function PrepSQL($value)
    {
        // Stripslashes
        if(get_magic_quotes_gpc()) 
        {
            $value = stripslashes($value);
        }

        // Quote
        $value = "'" . mysql_real_escape_string($value) . "'";

        return($value);
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
		 if(!empty($errorMessage)) 
		    {
			    echo("<p>There was an error with your form:</p>\n");
			    echo("<ul>" . $errorMessage . "</ul>\n");
            }
        ?>

		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
			<p>
				<label for='formTitle'>Title</label><br/>
				<input type="text" name="formTitle" maxlength="50" />
			</p>
			<p>
				<label for='formQuestion'>Question</label><br/>
				<input type="text" name="formQuestion" maxlength="500" style="width:200px; height:200px;"/>
			</p>

			<input type="submit" name="formSubmit" value="Submit" />
		</form>

<?php


$sql = "SELECT title, question FROM questions";
$result = $dbc->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo '<div class="question">';
       echo "Title: " . $row["title"]. " <br>Question: " . $row["question"]. "<br>";
       echo '</div>';
    }
} else {
    echo "0 results";
}
$dbc->close();
?>


	<?php
	echo file_get_contents("pagefooter.php");
	?>
	<?php
	echo file_get_contents("footer.php");
	?>
</div>
