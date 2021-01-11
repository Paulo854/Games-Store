<?php


if(isset($_POST['email'] && !empty($_POST['email'])){

$nome = addslashes($_POST['nome'])
$email = addslashes($_POST['email'])
$msg = addslashes($_POST['mensagem'])

$to = "dcsantos136@gmail.com";
$subject = "Contato Games Store";
$body = "Nome: ".$nome. "\r\n".
		"Email: ".$email. "\r\n".
		"Mensagem: ".$mensagem; 

$headers = "From: dcsantos136@gmail.com" . "\r\n".
			"reply-To: ".$email. "\e\n".
			"X=Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$headers)){

	echo("Email enviado com sucesso!");

}else{

	echo("Falha ao enviar email");
}

}
?>