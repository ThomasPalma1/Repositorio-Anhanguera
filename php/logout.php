<?php
    function logout(){

        include_once('connection.php');

        session_start();
        session_destroy();
        header ('Location: ../index.php');
        exit();

    }

    logout();
?>