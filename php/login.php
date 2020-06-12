<?php
    function login(String $email, String $password) {

        include_once('connection.php');

        session_start();

        $querySelect = "SELECT * from usuarios WHERE email = '$email' and senha = '$password'"; //selecionando o usuário com o email e senha inseridos
        $verifyData = mysqli_query($connection, $querySelect); //pegando do bd
        $dados = mysqli_fetch_array($verifyData); //transformando os dados num array p/ guardar na $_SESSION
        $quantityUsers = mysqli_num_rows($verifyData); //criando um array para contabilização

        if ($quantityUsers == 1){ //se houver um usuário com o email digitado
            $_SESSION['email'] = $dados['email'];
            $_SESSION['id'] = $dados['id_usuario'];
            $_SESSION['name'] = $dados['nome'];
            $_SESSION['qtdDenuncias'] = $dados['qtd_denuncias'];
            header('Location: ../main.php');
        }
        else {
            header('Location: ../index.php');
        }
        

    }

    $email = $_POST['email']; //pegando os dados do form
    $password = md5($_POST['password']);

    login($email, $password); //chamando a função
?>