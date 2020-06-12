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
            <li>olá, <?php echo($_SESSION['name']); ?></li>
            <li><a href="sendComplaint.php">enviar denúncia</a></li>
            <li><a href="myComplaints.php">minhas denúncias</a></li>
            <li><a href="php/logout.php">sair</a></li>
        </ul>
    </body>
</html>