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
        $sql = "DELETE FROM quiz2  WHERE questionid = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: manage2.php");        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">   
</head>
<body>
    <div class="container">
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Delete a question</h3>
                    </div>                   
                    <form class="form-horizontal" action="delete2.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $id;?>"/>
                      <p class="alert alert-error">Are you sure to delete the question ?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">Yes</button>
                          <a class="btn" href="manage.php">No</a>
                        </div>
                    </form>
                </div>            
    </div> <!-- /container -->
  </body>
</html>
