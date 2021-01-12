<?php
 include 'conecta.php';

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $senha = MD5($_POST['senha']);

$sql = "INSERT INTO usuarios VALUES";
$sql .=  "('$nome','$email', '$senha')";

if($conexao -> query($sql) == TRUE){
    header("Location: cadastro.html#paralogin");
}else{
	echo "erro";

}
$conexao -> close();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="teste.css">
</head>
<body>

</body>
</html>