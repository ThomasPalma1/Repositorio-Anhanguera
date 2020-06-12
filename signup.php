<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign up!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <div>
            <form class="form-horizontal" action="php/signUp.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Digite o seu nome" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Digite o email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Senha:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" placeholder="Digite a senha" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-light">Cadastrar</button>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href = "index.php"><p>Já tenho uma conta</p></a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>