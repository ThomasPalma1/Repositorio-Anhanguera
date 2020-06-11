<?php
    function login(String $email, String $password) {

        include_once('connection.php');

        session_start();

        $querySelect = "SELECT * from usuarios WHERE email = '$email' and senha = '$password'"; //selecionando o usuário com o email e senha inseridos
        $verifyData = mysqli_query($connection, $querySelect); //pegando do bd
        $quantityUsers = mysqli_num_rows($verifyData); //criando um array para contabilização

        if ($quantityUsers == 1){ //se houver um usuário com o email digitado
            $_SESSION['email'] = $email;
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