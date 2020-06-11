<?php

    session_start();

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
        $dadosAcompanhento = mysqli_fetch_array($resultAcompanhamento);

        
        while ($dadosDenuncias = mysqli_fetch_array($resultDenuncias)) {
            echo('<article>');
            echo('Rua: '.$dadosEndereco['rua']);
            echo('Bairro: '.$dadosAcompanhento['status']);
            echo('Mensagem: '.$dadosDenus['bairro']);
            echo('Cidade: '.$dadosDenuncias['cidade']);
            echo('Estado: '.$dadosDenuncias['estado']);
            echo('Descrição: '.$dadosDenuncias['descricao']);
            echo('Status: '.$dadosAcompanhento['mensagem']); 
            echo('</article>');
        }
    }

    $id = $_SESSION['id'];
    retrieveComplaintsFromUser($id);
?>