<?php


if(isset($_POST['email']) && !empty ($_POST['email'])){


$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$cidade = addslashes($_POST['cidade']);
$bairro = addslashes($_POST['bairro']);
$message = addslashes($_POST['message']);

$to = "contato@zerodengue.com";
$subject = "Denúncia.";
$corpoemail = "Nome: ".$name. "\n".
              "Email: ".$email. "\n".
              "Cidade: ".$cidade. "\n".
              "Bairro: ".$bairro. "\n".
              "Mensagem: ".$message;


$header = "From:thomas.palma3@gmail.com"."\n".
            "Reply-To:".$email."\n".
            "X=Mailer:PHP/".phpversion();

if (mail($to,$subject,$corpoemail,$header)){

echo("Denúncia enviada com sucesso!");

}else {
    echo("Não foi possível enviar a sua denúncia");
} 




}








