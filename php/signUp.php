<?php

    function signUp(String $email, String $userPassword, String $name){ //declarando a função

        require_once('connection.php'); //conexão bd
        
        $querySelect = "SELECT email FROM usuarios WHERE email = '$email'";
        $verifyData = mysqli_query($connection, $querySelect); //vai puxar os campos do bd que possuem o mesmo e-mail
        $quantityUsers = mysqli_fetch_array($verifyData); //transforma os usuários num array para que eles possam ser contados

        if ($quantityUsers == 0){ //se a quantidade de usuários com o email digitado for diferente de zero, quer dizer que esse e-mail já está cadastrado no sistema!
            $queryInsert = "INSERT INTO usuarios (email, senha, nome) VALUES ('$email','$userPassword','$name')";
            $insertData = mysqli_query($connection, $queryInsert); //cadastrando o usuário
            echo('Sign up successful!');
            header('Location: ../index.php');
        }
        else {
            echo('This user is already registered. '); //o usuário já está cadastrado
            echo('<a href="../signup.php">Back</a>');
        }
    }

    $email = $_POST['email']; //pegando as variáveis do form
    $userPassword = md5($_POST['password']);
    $name = $_POST['name'];

    signUp($email, $userPassword, $name); //chamando a função
?>