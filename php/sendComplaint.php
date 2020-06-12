<?php

    session_start();

    function sendComplaint(String $descricao, String $rua, String $bairro, String $cidade, String $estado, int $qtdDenuncias){

        include_once('connection.php');

        if(isset($_SESSION['email'])){ //verificando se o usuário está logado

            if ($qtdDenuncias < 20){ //verificando se o usuário possui menos de 20 denúncias
                $id = $_SESSION['id'];
                $status = "Sua denúncia será averiguada.";

                $sqlDenuncias = "INSERT INTO denuncias (descricao, id_usuario, rua, status, bairro, cidade, estado) VALUES ('$descricao', '$id', '$rua', '$status', '$bairro', '$cidade', '$estado')"; //enviando a descrição para o banco
                mysqli_query($connection, $sqlDenuncias);
                
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

                $qtdDenuncias = $qtdDenuncias + 1;
                $sqlQtdDenuncias = "UPDATE usuarios SET qtd_denuncias = '$qtdDenuncias' WHERE id_usuario = '$id'";
                mysqli_query($connection, $sqlQtdDenuncias);

                echo('A denúncia foi enviada. '); //o usuário já está logado
                echo('<a href="../main.php">Voltar</a>');

                return $qtdDenuncias;
            }
            else {
                echo('Você já possui 20 denúncias.'); //o usuário possui 20 denuncias
                echo('<a href="../main.php">Voltar</a>');
            }

        }
        else {
            echo('Você não está logado. '); //o usuário já está logado
            echo('<a href="../main.php">Voltar</a>');
        }

    }

    $descricao = $_POST['descricao']; //pegando arquivos do form
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $qtdDenuncias = intval($_SESSION['qtdDenuncias']);

    $_SESSION['qtdDenuncias'] = sendComplaint($descricao, $rua, $bairro, $cidade, $estado, $qtdDenuncias); //chamando a função

    echo(strval($_SESSION['qtdDenuncias']));
?>