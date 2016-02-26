<?php
include 'config.php';


echo file_get_contents("head.php");


echo file_get_contents("header.php");

?>
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron fp-jt">
        <h1> Welcome to Classmate, <?php echo $_SESSION["userName"]; ?></h1>
        <p>Classmate.dk is here to help you</p>
    </header>

    <hr>



    <!-- Footer -->
    <?php
    echo file_get_contents("pagefooter.php");
    ?>

    <?php
    echo file_get_contents("footer.php");
    ?>
