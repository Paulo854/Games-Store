<?php
include_once("conexao.php");

session_start();
//verificação
if(!isset($_SESSION['logado'])):
	header('sistemalogin.php');
endif;
//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Compras</title>
	<link rel="stylesheet" type="text/css" href="compras.css">
</head>
<body>
	<h1>Oi</h1>
</body>
</html>