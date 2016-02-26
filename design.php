	<?php 
    include 'config.php';
	echo file_get_contents("head.php");
	?>
	<?php 
	echo file_get_contents("header.php");
	?>
	
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron fp-jt">
            <h1><i class="fa fa-pencil designcat"></i> Design questions</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        </header>

        <hr>

        <!-- Title -->
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

        <div class="question-container col-sm-12">

            <?php

            $sql = "SELECT `id`,`title`, `category`, `question`, `author`, `date` FROM r_question WHERE category ='2' ORDER BY `date`";
            $result = $dbc->query($sql);
            if($result){
                while($row = $result->fetch_assoc()){
                    echo '<div class="question designcat col-md-12">';
                    echo "<div class=\"title col-sm-12\"><a href=\"ranswer.php?id=$row[id]\"><h3>$row[title]</h3></a></div>";
                    echo $row["title"];
                    echo $row["question"];
                    echo $row["author"];
                    echo $row["date"];
                    echo '</div>';

                }


            }


            /*
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="question codecat col-md-12">';
                  /* echo "Title: " . $row["title"]. " <br>Question: " . $row["question"]. "<br>";*/
            /* echo "<div class=\"title col-sm-12\"><a href=\"rquestion.php?id=$row[id]\"><h2>$row[title]</h2></a></div>";
              echo '</div>';
           }
       } else {
           echo "0 results";
       }*/
            $dbc->close();
            ?>
        </div>
    </div>

        
	<?php
	echo file_get_contents("pagefooter.php");
	?>

	<?php
	echo file_get_contents("footer.php");
	?>
