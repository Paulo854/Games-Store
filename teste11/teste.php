<?php
session_start();
include('conecta.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: teste11.html');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$novasenha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT email from usuarios where email = '{$email}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['email'] = $email;
	$atualizar = mysql_query("UPDATE usuarios SET senha = md5('$novasenha')");
	exit();