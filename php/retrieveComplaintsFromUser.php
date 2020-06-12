<?php

<<<<<<< HEAD
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
=======
    function retrieveComplaintsFromUser($id){

        include_once('connection.php');

        $sql = "SELECT * FROM denuncias WHERE id_usuario = '$id'";
        $resultDenuncias = mysqli_query($connection, $sql);
        $dadosDenuncias = mysqli_fetch_array($resultDenuncias);
        $idDenuncia = $dadosDenuncias['id_denuncia'];

        $sqlEnderecos = "SELECT * FROM enderecos WHERE id_denuncia = '$idDenuncia'";
        $resultEnderecos = mysqli_query($connection, $sqlEnderecos);
        $dadosEndereco = mysqli_fetch_array($resultEnderecos);

        $sqlAcompanhamento = "SELECT * FROM acompanhamento WHERE id_denuncia = '$idDenuncia'";
        $resultAcompanhamento = mysqli_query($connection, $sqlAcompanhamento);
        $dadosAcompanhamento = mysqli_fetch_array($resultAcompanhamento);

        
        while ($dadosDenuncias = mysqli_fetch_array($resultDenuncias)) {
            echo('<article>');
                echo('<br>Rua: '.$dadosEndereco['rua']);
                echo('<br>Bairro: '.$dadosEndereco['bairro']);
                echo('<br>Cidade: '.$dadosEndereco['cidade']);
                echo('<br>Estado: '.$dadosEndereco['estado']);
                echo('<br>Descrição: '.$dadosDenuncias['descricao']);
                echo('<br>Status: '.$dadosAcompanhamento['mensagem']);
>>>>>>> ab0bbf129a9819c6f93a9a570fe5c0ba04ed8313
            echo('</article>');
        }

        echo('<p style="color: #FFFFFF">Todas as denúncias foram exibidas. ');
        echo('<a href="./main.php">Voltar</a>');
    }

    $idUsuario = $_SESSION['id'];
    retrieveComplaintsFromUser($idUsuario);
?>