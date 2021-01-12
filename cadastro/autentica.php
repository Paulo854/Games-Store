<?php
session_start();
include('conecta.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: sistemadelogin.html');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT email, senha from usuarios where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: /POC/painel.php');
	exit();
} else {
   echo "ERRO!!! E-mail ou Senha incorretos ou este usuário não existe no banco de dados";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Verificação</title>
<style type="text/css">
	body{
		background-color: white;
	}
</style>
</head>
<body>

</body>
</html>