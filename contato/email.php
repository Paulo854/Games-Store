<?php

if(isset($_POST['email']) && !empty($_POST['email']);{

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$mesagem = addcslashes($_POST['mesagem']);

$to = "gamej277@gmail.com";
$subjet = "Contato - SITE - Games Stores";
$body = "Nome: ".$nome. "\r\n".
			"Email: ".$email."\r\n".
				"Mensagem ".$mesagem;

$header = "From:gamej277@gmail.com"."\r\n".
			"Reply-To:".$email."\r\n".
			"X=Mailer:PHP/".phpversion();
if (mail($to,$subjet,$body,$header)){

	echo("E-mail Enviado com sucesso!!");

}else{

	echo("O E-mail não pode ser enviado");

}

}

?>