<?php

function nameExist($name){
    $fileContent = file_get_contents("users");
    $userList = json_decode($fileContent, true);

    foreach ($userList as $user){
        if ($name == $user["user"]) {
            echo "false";
            exit();
        }
    }
}

if(isset($_GET["regUsername"])){
    nameExist($_GET["regUsername"]);
}

if(isset($_GET["user"])){
    nameExist($_GET["user"]);
}

echo "true";