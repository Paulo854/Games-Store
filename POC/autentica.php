<?php
session_start();
include('conecta.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: cadastro.html#paralogin');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select email, senha from usuarios where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: painel.php');
	exit();
} else {
   echo "erro";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Verificação</title>
	<link rel="stylesheet" type="text/css" href="teste.css">
</head>
<body>

</body>
</html>