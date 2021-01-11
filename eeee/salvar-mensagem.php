<?php
include_once('conecta.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['messagem'];

	 $query = "INSERT INTO mensagem_contatos (nome,email,messagem) VALUES ('$nome','$email','$mensagem')";
     $insert = mysql_query($query,$conexao);

?>