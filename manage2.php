<html>
<head>
</head>
<body>

<p>

                               <a href="add_quiz2.php">Create a question</a>
                    
                </p>

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
                   $sql = 'SELECT * FROM quiz2';
                   foreach ($pdo->query($sql) as $row) {
					   
                     echo '<tr>';
                            echo '<td>'. $row['questionid'] . '</td>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['choice1'] . '</td>';
                            echo '<td>'. $row['choice2'] . '</td>';
                            echo '<td>'. $row['choice3'] . '</td>';
                            echo '<td>'. $row['answer'] . '</td>';
                            
                           
                              echo '<td width=250>';
                               
                                echo '<a href="delete2.php?id='.$row['questionid'].'">Delete this question</a>';
								
                                echo '</td>';
								 echo '<td width=250>';
								echo '<a href="edit2.php?id='.$row['questionid'].'">Edit this question</a>';
								 echo '</td>';
                                echo '</tr>';

                   }
                   
            
                  ?>
                  </tbody>
            </table>
            
            </body>
            </html>