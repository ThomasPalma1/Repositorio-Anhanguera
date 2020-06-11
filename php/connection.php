<?php
    $server = "127.0.0.1";
    $user = "root";
    $serverPassword = "";
    $dbName = "zeradengue";

    try{
        $connection = mysqli_connect($server, $user, $serverPassword, $dbName);
        // echo('Successfully connected!');
    }
    catch(Exception $error){
        echo($error);
    }
?>