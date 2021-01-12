<?php

if(isset($_POST['sendemail'])){

	$nome = $_POST['nome'];	
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
}

$email = new \SendGrid\Mail\Mail();
$email->setFrom("pchefea44@gmail.com", "Example User");
$email->addTo($email, $nome);
$email->addContent("text/plain", $mensagem);	
$sendgrid = new \SendGrid(getenv('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'));

if(sendgrid->send($email));
{

	echo "Email Enviado com Sucesso";

}
?>