<?php

if(isset($_POST(["email"])) && !empty($_POST(["email"]))) 


$nome=addslashes($_POST(["name"]))
$email=addslashes($_POST(["email"]))
$mensagem=addslashes($_POST(["message"]))

$to = "partilendo@gmail.com";
$subjet = "Contato - Partilendo";
$body= "Nome:".$nome. "/n"
       "Email:".$email. "/n"
       "Mensagem" .$mensagem;
    $header = "From:mariajuliadealmeidasouza1@gmail.com"."/r/n"
                ."Reply-To: .$email. "/e/n"
                ."X=Mailer:PHP/" .phpversion();

if(mail($to,$subject,$body,$header)){

echo("Email enviado com sucesso");

}else{
    
    echo("O email não pode ser enviado")";"


}




?>