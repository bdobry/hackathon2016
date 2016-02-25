<?php

session_start();

$fileContent = file_get_contents("users");

$userList = json_decode($fileContent, true);

if(isset($_GET["oldPass"])){
    foreach ($userList as $user){
        if($user["id"] == $_SESSION["userId"]) {
            if ($_GET["oldPass"] == $user["pass"]){
                echo "true";
                exit();
            }
        }
    }
}

echo "false";