<?php

    include_once('php/connection.php');
    session_start();

?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        
        <ul>
            <li><a href="main.php">home</a></li>
            <li><a href="sendComplaint.php">send complaint</a></li>
            <li><a href="myComplaints.php">my complaints</a></li>
            <li><a href="php/logout.php">logout</a></li>
        </ul>
    </body>
</html>