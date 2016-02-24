	<?php 
	echo file_get_contents("head.php");
	?>
	<?php 
	echo file_get_contents("header.php");
	?>
	
<    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron fp-jt">
            <h1 class="question-title">Question title here</h1>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <h3><i class="fa fa-question-circle"></i> Question:</h3>
            <div class="col-xs-12 questionwrap">
            <div class="votewrap col-xs-2 col-lg-1 inline-block">
                <div class="row">
                    <div class="col-xs-12"><i class="vote upvote fa fa-chevron-up fa-3x"></i></div>
                    <div class="col-xs-12"><i class="vote downvote fa fa-chevron-down fa-3x"></i></div>
                </div>
            </div>
            <div class="well subquestion-container col-xs-10 col-lg-11 inline-block">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae dicta, veritatis natus unde tempora quo ex maxime aliquid rerum ipsum omnis ipsam non laborum deleniti, iste, fugit maiores neque quos?</p>
            </div>
            </div>

            <h3><i class="fa fa-chevron-circle-down"></i> Replies:</h3>
            <div class="replies col-sm-12">
            <div class="bg-info reply">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae dicta, veritatis natus unde tempora quo ex maxime aliquid rerum ipsum omnis ipsam non laborum deleniti, iste, fugit maiores neque quos?</p>
            </div>
            </div>
            <div class="add-reply col-md-12">
            <h3>Answer:</h3>
            <form action="">
             <div class="form-group">
              <textarea class="form-control" rows="5" id="comment" placeholder="Write your answer"></textarea>
            </div>
            <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Answer</button>
            </form>

        </div>

        
	<?php
	echo file_get_contents("pagefooter.php");
	?>

	<?php
	echo file_get_contents("footer.php");
	?>