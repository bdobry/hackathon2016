<?php

$_SESSION["userId"] = null;
$_SESSION["userName"] = null;
$_SESSION["isTeacher"] = null;
$_SESSION["isAuthenticated"] = false;
session_destroy();

header("location: /index.php");

?>

