<?php
    include_once('php/connection.php');
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
<<<<<<< HEAD
        <div>
            <form class="form-horizontal" action="php/login.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Insira o e-mail" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Senha:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" placeholder="Insira a senha" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-light">Entrar</button>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="signup.php"><p>Criar uma conta</p></a>
                    </div>
=======
        <form class="form-horizontal" action="php/login.php" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Submit</button>
>>>>>>> ab0bbf129a9819c6f93a9a570fe5c0ba04ed8313
                </div>
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="signup.php"><p>Create an account</p></a>
                </div>
            </div>
        </form>
    </body>
</html>