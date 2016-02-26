<?php
include 'config.php';


echo file_get_contents("head.php");


echo file_get_contents("header.php");

?>
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron fp-jt">
        <h1>Who are we?</h1>
        <p>Classmate.dk is here to help you, and your classmates, with your studies</p>
    </header>

    <hr>



    <!-- Footer -->
    <?php
    echo file_get_contents("pagefooter.php");
    ?>

    <?php
    echo file_get_contents("footer.php");
    ?>
