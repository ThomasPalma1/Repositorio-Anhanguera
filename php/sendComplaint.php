<?php

    function sendComplaint(String $descricao, String $rua, String $bairro, String $cidade, String $estado){

        include_once('connection.php');
        session_start();

        if(isset($_SESSION['email'])){ //verificando se o usuário está logado

            $id = $_SESSION['id'];

            $sqlDenuncias = "INSERT INTO denuncias (descricao, id_usuario) VALUES ('$descricao', '$id')"; //enviando a descrição para o banco
            mysqli_query($connection, $sqlDenuncias);

            $idDenuncia = strval(mysqli_insert_id($connection)); //ultima denuncia enviada

            $sqlEnderecos = "INSERT INTO enderecos (estado, rua, cidade, bairro, id_denuncia) VALUES ('$estado', '$rua', '$cidade', '$bairro', '$idDenuncia')";
            mysqli_query($connection, $sqlEnderecos);

            $status = '1';
            $mensagem = "Sua denúncia será averiguada.";
            $sqlAcompanhamento = "INSERT INTO acompanhamento (id_denuncia, status, mensagem) VALUES ('$idDenuncia', '$status', '$mensagem')";
            mysqli_query($connection, $sqlAcompanhamento);
            
            $to = "contato@msaude.com.br"; //criando a estrutura do e-mail
            $subject = "Denúncia.";
            $corpoemail = "Email: ".$_SESSION['email']. "\n".
                            "Rua: ".$rua. "\n".
                            "Bairro: ".$bairro. "\n".
                            "Cidade: ".$cidade. "\n".
                            "Estado: ".$estado. "\n".
                            "Mensagem: ".$descricao;
            
            
            $header = "contato@zerodengue.com.br"."\n".
                            "Reply-To:".$_SESSION['email']."\n".
                            "X=Mailer:PHP/".phpversion();

            mail($to,$subject,$corpoemail,$header); //mandando e-mail para o ministério da saúde

            echo('A denúncia foi enviada. '); //o usuário já está logado
            echo('<a href="../main.php">Back</a>');
        }
        else{
            echo('Você não está logado. '); //o usuário já está logado
            echo('<a href="../index.php">Back</a>');
        }

    }

    $descricao = $_POST['descricao']; //pegando arquivos do form
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];


    sendComplaint($descricao, $rua, $bairro, $cidade, $estado); //chamando a função
?>