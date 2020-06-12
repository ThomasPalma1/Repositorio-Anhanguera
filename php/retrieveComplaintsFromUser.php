<?php

    session_start();

    function retrieveComplaintsFromUser($idUsuario){

        include_once('connection.php');

        $sql = "SELECT * FROM denuncias WHERE id_usuario = '$idUsuario'";
        $result = mysqli_query($connection, $sql);
        // $dados = mysqli_fetch_assoc($result);

        while ($dados = mysqli_fetch_assoc($result)) {
            echo('<article style="border: 1px solid white; color: #FFFFFF; padding: 10px; border-radius: 5px">');
                echo('Rua: '.$dados['rua']);
                echo('<br>Bairro: '.$dados['bairro']);
                echo('<br>Cidade: '.$dados['cidade']);
                echo('<br>Estado: '.$dados['estado']);
                echo('<br>Descrição: '.$dados['descricao']);
                echo('<br>Status: '.$dados['status']);
            echo('</article>');
        }

        echo('<p style="color: #FFFFFF">Todas as denúncias foram exibidas. ');
        echo('<a href="./main.php">Voltar</a>');
    }

    $idUsuario = $_SESSION['id'];
    retrieveComplaintsFromUser($idUsuario);
?>