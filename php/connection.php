<?php
    $server = "127.0.0.1"; //ip
    $user = "root"; //usuário
    $serverPassword = ""; //senha
    $dbName = "zeradengue"; //nome do bd

    try{
        $connection = mysqli_connect($server, $user, $serverPassword, $dbName);
        // echo('Successfully connected!');
    }
    catch(Exception $error){
        echo($error);
    }
?>