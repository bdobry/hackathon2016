<?php
echo file_get_contents("head.php");
include 'config.php';
?>
<?php
echo file_get_contents("header.php");
?>

<div class="container">



    <?php


    $id = $_GET["id"];
    $sql = "SELECT `id`, `title`, `category`, `question`, `author`, `date` FROM r_question WHERE id = '$id'";
    $result = $dbc->query($sql);

    if ($result) {
    // output data of each row
    while($row = $result->fetch_assoc()) {



    ?>



    <!-- Jumbotron Header -->
    <header class="jumbotron fp-jt">
        <h1 class="question-title"><?php echo $row["title"];?> </h1>

    </header>

    <hr>

    <!-- Title -->

    <div class="row">
        <h3><i class="fa fa-question-circle"></i> Question:</h3>
        <div class="col-xs-12 questionwrap">
            <div class="votewrap col-xs-2 col-lg-1 inline-block">
                <div class="row">
                    <div class="col-xs-12 text-center"><a onclick="myFunction()"><i class="vote upvote fa fa-chevron-up fa-3x"></i></a></div>
                    <div class="col-xs-12"><h4 class="votecounter text-center" id="demo"></h4></div>
                    <div class="col-xs-12 text-center"><a onclick="myFunctionminus()"><i class="vote downvote fa fa-chevron-down fa-3x"></i></a></div>
                </div>
            </div>
            <div class="well subquestion-container col-xs-10 col-lg-11 inline-block">


                <?php

                echo  $row["question"];
                echo  "<br>";
                echo  $row["author"];
                echo "&nbsp;";
                echo  $row["date"];
                /* echo "<div class=\"title\"><a href=\"question-tpl.php?id=$row[id]\"><h1>$row[title]</h1></a></div>";*/

                }
                } else {
                    echo "0 results";
                }



                ?>


            </div>
        </div>

        <h3><i class="fa fa-chevron-circle-down"></i> Replies:</h3>
        <div class="replies col-sm-12">
            <div class="bg-info reply">
                <p>
                    <?php
                    $id = $_GET['id'];
                    $sql = "SELECT `id`,`text`, `author`, `date` FROM r_answer WHERE q_id='$id' ORDER BY `date`";
                    $result = $dbc->query($sql);
                    if($result){
                        while($row = $result->fetch_assoc()){
                            echo '<div class="question designcat col-md-12" style="margin-top: 5px;">';
                            echo $row["text"];
                            echo "<br>";
                            echo $row["author"];
                            echo $row["date"];
                            echo '</div>';


                        }


                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="add-reply col-md-12">
            <h3>Answer:</h3>

            <form action="answer.php" method="post">
                <input type="hidden" name="q_id" value="<?php echo $_GET["id"]; ?>">
                <div class="form-group">
                <label for="formDate">Date</label>
                <div class="input-group">
                    <input type="date" class="form-control" name="formDate" id="InputName" placeholder="Enter Date" required>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
            </div>
            <div class="form-group">
                <label for="formAuthor">Author</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="formAuthor" id="InputName" placeholder="Enter Author" required>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
            </div>

                <div class="form-group">
                    <textarea class="form-control" name="formText" rows="5" id="comment" placeholder="Write your answer"></textarea>
                </div>
                <button type="submit" name="formSubmit" class="btn btn-success green"><i class="fa fa-share"></i> Answer</button>
            </form>


        </div>


        <?php
        echo file_get_contents("pagefooter.php");
        ?>

<?php
echo file_get_contents("footer.php");
?>