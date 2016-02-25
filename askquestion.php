	<?php 
	echo file_get_contents("head.php");
	?>
	<?php 
	echo file_get_contents("header.php");
  include 'config.php';
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
    if(empty($_POST['formCategory']))
        {
      $errorMessage .= "<li>You forgot to select the category!</li>";
    }
    if(empty($_POST['formQuestion']))
        {
      $errorMessage .= "<li>You forgot to enter a question!</li>";
    }


    $varTitle = $_POST['formTitle'];
    $varCategory = $_POST['formCategory'];
    $varQuestion = $_POST['formQuestion'];
  

    if(empty($errorMessage)) 
        {
      

      $sql = "INSERT INTO questions (title, category_id, question ) VALUES (".
              PrepSQL($varTitle) . ", " .
              $varCategory . ", " .
              PrepSQL($varQuestion) . ")";
      $result = $dbc->query($sql);
      
      // header("Location: main.php");
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

        <!-- Jumbotron Header -->
  <header class="jumbotron fp-jt">
    <h1>Ask question</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
  </header>

  <hr>


  <div class="row">



    <?php
     if(!empty($errorMessage))
        {
          echo("<p>There was an error with your form:</p>\n");
          echo("<ul>" . $errorMessage . "</ul>\n");
            }
        ?>


   <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            
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
