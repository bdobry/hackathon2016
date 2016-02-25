
<?php
$username = "Stranger";
if(isset($_COOKIE["user"])){
	$username = $_COOKIE["user"];
}
?>


<?php
include 'config.php';
echo "<h2>id = " . $_GET['id'] . "</h2><br>";
echo "<h2>Posted by: " . $username . "</h2>";
$id=$_GET['id'];
$sql = "SELECT title, question, id FROM questions where id = '$id'";
$result = $dbc->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo '<div class="question">';
       echo "<h1>Title: " . $row["title"]. " <br>Question: " . $row["question"]. "</h1><br>";
     /* echo "<div class=\"title\"><a href=\"question-tpl.php?id=$row[id]\"><h1>$row[title]</h1></a></div>";*/
       echo '</div>';
    }
} else {
    echo "0 results";
}

echo "<a href=\"main.php\">Go back</a>";
$dbc->close();


?>








   