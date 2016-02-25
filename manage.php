<?php echo file_get_contents("head.php"); ?>
<?php echo file_get_contents("header.php");?>
  
	
   <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron fp-jt">
            <h1>Edit Quiz</h1>
          <div class="col-sm-6 col-md-6 text-right">
              
                <div class="btn-group inline" role="group">
                    
                    <a href="add_quiz.php" class="btn btn-primary">Create question</a>
                    <a href="quiz.php" class="btn btn-danger">Go back</a>
                   
                </div>
                </div>
        </header>

        <hr>

        <!--Quiz -->
        <div class="row">
        
            <div class="col-lg-12">


 <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Number</th>
                      <th>Question</th>
                      <th>Wrong answer1</th>
                      <th>Wrong answer2</th>
                      <th>Wrong answer3</th>
                      <th>Correct answer</th>
                      
                    </tr>
                  </thead>
                  <tbody>
 <?php
                   include 'db.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM quiz';
                   foreach ($pdo->query($sql) as $row) {
					   
                     echo '<tr>';
                            echo '<td>'. $row['questionid'] . '</td>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['choice1'] . '</td>';
                            echo '<td>'. $row['choice2'] . '</td>';
                            echo '<td>'. $row['choice3'] . '</td>';
                            echo '<td>'. $row['answer'] . '</td>';
                            
                           
                              echo '<td>';
                               
                                echo '<a href="delete.php?id='.$row['questionid'].'"><i class="fa fa-trash fa-2x">
		                    </a></i>';
								
                                echo '</td>';
								 echo '<td>';
								echo '<a href="edit.php?id='.$row['questionid'].'"><i class="fa fa-edit fa-2x"></a></i>';
								 echo '</td>';
                                echo '</tr>';

                   }
                   
            
                  ?>
                  </tbody>
            </table>
            
          
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
