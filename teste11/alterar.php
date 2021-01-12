<?php
session_start();
include('conecta.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: senha.html');
	exit();
}   
 
$email = $_POST['email'];
$senha = $_POST['senha'];

		$atualizar = mysql_query("UPDATE usuarios SET senha = '$senha' WHERE email = '$email'");

		mysql_query($atualizar, $conexao)

?>