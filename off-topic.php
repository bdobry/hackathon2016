	<?php 
    include 'config.php';
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

                        $sql = "SELECT title, question, id FROM questions WHERE category_id='3'";
                        $result = $dbc->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo '<div class="question">';
                              /* echo "Title: " . $row["title"]. " <br>Question: " . $row["question"]. "<br>";*/
                              echo "<div class=\"title\"><a href=\"question-tpl.php?id=$row[id]\"><h1>$row[title]</h1></a></div>";
                               echo '</div>';
                            }
                        } else {
                            echo "0 results";
                        }
                        $dbc->close();
                        ?>

            </div>

        
	<?php
	echo file_get_contents("pagefooter.php");
	?>

	<?php
	echo file_get_contents("footer.php");
	?>
