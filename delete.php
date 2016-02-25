<?php
    require 'db.php';
    $id = 0;
     
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['id'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM quiz  WHERE questionid = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: manage.php");        
    }
?>

<?php echo file_get_contents("head.php"); ?>
<?php echo file_get_contents("header.php");?>
  
	
   <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron fp-jt">
            <h1>Edit Quiz</h1>
          <div class="col-sm-6 col-md-6 text-right">
              
                <div class="btn-group inline" role="group">
                    
                    <a href="manage.php" class="btn btn-danger">Go back</a>
                   
                </div>
                </div>
        </header>

        <hr>

        <!--Quiz -->
        <div class="row">
        
            <div class="col-lg-12">

<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h1>Delete question</h1>


             
                    <form class="form-horizontal" action="delete.php" method="post">
                      <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>"/>
                      <h3>Are you sure to delete the question ?</h3>
                      <br>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-primary">Yes</button>
                          <a class="btn btn-warning" href="manage.php">No</a>
                        </div>
                    </form>
                        
    </div> <!-- /container -->
  
   </div>
        </div>
        <!-- /.row -->

        <!-- Quiz-->
       
        <!-- /.row -->

        <hr>
     </div>

        <!-- Footer -->
	<?php
	echo file_get_contents("pagefooter.php");
	?>

	<?php
	echo file_get_contents("footer.php");
	?>
