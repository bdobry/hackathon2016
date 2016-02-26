<?php
 include 'config.php';



        if(isset($_POST['formSubmit'])){
            /* variables for question section */

            $title = $_POST['formTitle'];
            $category = $_POST['formCategory'];
            $question = $_POST['formQuestion'];
            $author= $_SESSION['userName'];
            $date= date('Y-m-d');
            $sql = "INSERT INTO `r_question`(`title`, `category`, `question`, `author`, `date`) VALUES ('$title','$category','$question','$author','$date')";

            $result = $dbc->query($sql);
            $pages = [
                1 => "design.php",
                2 => "code.php",
                3 => "off-topic.php"
            ];
header("location: ". $pages[$category]);

} 


echo file_get_contents("head.php");
echo file_get_contents("header.php");
?>



<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron fp-jt">
        <h1>Ask question</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
    </header>

    <hr>


    <div class="row">

        <form action="" method="post">

            <div class="col-lg-6">
                <div class="well well-sm"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Required Field</strong></div>
                <div class="form-group">
                    <label for="formTitle">Title</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="formTitle" id="InputName" placeholder="Enter Title" required>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>

                <div class="form-group">
                    <label for="InputCategory">Category</label>
                    <div class="input-group">
                        <div class="form-group">
                            <select name="formCategory" class="form-control" id="categoryselect">
                                <option value="" selected disabled>Please select</option>
                                <option value="1">Design</option>
                                <option value="2">Code</option>
                                <option value="3">Off topic</option>
                            </select>
                        </div>

                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>

                <div class="form-group">
                    <label for="formQuestion">Question</label>
                    <div class="input-group">
                        <textarea name="formQuestion" id="InputMessage" class="form-control" rows="5" placeholder="Write your question here" required></textarea>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>

                <input type="submit" name="formSubmit" id="submit" value="Submit" class="btn btn-primary pull-right">
            </div>
        </form>
    </div>


</div>

<?php


echo file_get_contents("pagefooter.php");
?>

<?php
echo file_get_contents("footer.php");
?>


