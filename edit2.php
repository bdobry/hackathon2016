<?php require 'db.php';
 
    
     
    if (isset($_POST) && !empty($_POST)) {
        // keep track validation errors
		$questionidError = null;
        $nameError = null;
		$choice1 = null;
		$choice2 = null;
		$choice3 = null;
		$answer = null;
        
         
		 
        // keep track post values
		$questionid = $_GET['id'];
        $name = $_POST['name'];
		$choice1 = $_POST['choice1'];
		$choice2 = $_POST['choice2'];
		$choice3 = $_POST['choice3'];
		$answer = $_POST['answer'];
        
         
        // validate input
        $valid = true;
       
	    if (empty($questionid)) {
            $questionidError = 'Please write question';
            $valid = false;
        } 
         
        if (empty($name)) {
            $nameError = 'Please write question';
            $valid = false;
        } 
		
		  if (empty($choice1)) {
            $choice1Error = 'Please write incorrect answer';
            $valid = false;
        } 
		
		
		  if (empty($choice2)) {
            $choice2Error = 'Please write incorrect answer';
            $valid = false;
        } 
		
		
		  if (empty($choice3)) {
            $choice3Error = 'Please write incorrect answer';
            $valid = false;
        } 
		
		  if (empty($answer)) {
            $answerError = 'Please write correct answer';
            $valid = false;
        } 
         
       
         
        // update data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE quiz2 SET name = ?, choice1 = ?, choice2 = ?, choice3 = ?, answer = ? WHERE questionid = ? ";
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$choice1,$choice2,$choice3,$answer,$questionid));
       
            header("Location: manage2.php");
        }
    } else {

        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM quiz2 where questionid = ?";
        $q = $pdo->prepare($sql);
		$q->execute(array($_GET['id']));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $questionid = $data['questionid'];
        $name = $data['name'];
		$choice1 = $data['choice1'];
		$choice2 = $data['choice2'];
		$choice3 = $data['choice3'];
		$answer = $data['answer'];
        
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
                    
                    <a href="manage2.php" class="btn btn-danger">Go back</a>
                   
                </div>
                </div>
        </header>

        <hr>

        <!--Quiz -->
        <div class="row">
        
            <div class="col-lg-12">

<div class="row">
    <div class="col-md-offset-2 col-md-8">

<form class="form-horizontal" method="post">
                     
                   
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Question</label>
                        <div class="controls">
                            <input name="name" type="text" class="form-control" placeholder="name" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      
                       <div class="control-group <?php echo !empty($choice1Error)?'error':'';?>">
                        <label class="control-label">Choice1</label>
                        <div class="controls">
                            <input name="choice1" type="text" class="form-control"  placeholder="choice1" value="<?php echo !empty($choice1)?$choice1:'';?>">
                            <?php if (!empty($choice1Error)): ?>
                                <span class="help-inline"><?php echo $choice1Error;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      
                         <div class="control-group <?php echo !empty($choice2Error)?'error':'';?>">
                        <label class="control-label">Choice2</label>
                        <div class="controls">
                            <input name="choice2" type="text" class="form-control"  placeholder="choice2" value="<?php echo !empty($choice2)?$choice2:'';?>">
                            <?php if (!empty($choice2Error)): ?>
                                <span class="help-inline"><?php echo $choice2Error;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      
                         <div class="control-group <?php echo !empty($choice3Error)?'error':'';?>">
                        <label class="control-label">Choice3</label>
                        <div class="controls">
                            <input name="choice3" type="text" class="form-control" placeholder="choice3" value="<?php echo !empty($choice3)?$choice3:'';?>">
                            <?php if (!empty($choice3Error)): ?>
                                <span class="help-inline"><?php echo $choice3Error;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      
                         <div class="control-group <?php echo !empty($answerError)?'error':'';?>">
                        <label class="control-label">Answer</label>
                        <div class="controls">
                            <input name="answer" type="text" class="form-control" placeholder="answer" value="<?php echo !empty($answer)?$answer:'';?>">
                            <?php if (!empty($answerError)): ?>
                                <span class="help-inline"><?php echo $answerError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      
                      <div class="form-actions">
                      <br>
                          <button type="submit" class="btn btn-success">Edit</button>
                         
                        </div>
                    </form>

        
 </div>
     </div>
    
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
