<?php
include_once("conexao.php");

$login = $_POST['nome'];
$nome  = $_POST['login'];
$email = $_POST['senha'];
$Senha = $_POST['email']; 

$sql = "INSERT INTO usuarios (nome, login, senha, email) VALUES ('$login', '$nome', '$email', '$Senha' )";
$salvar = mysqli_query($conexao, $sql);

$linhas = msqli_affected_rows($conexao);

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cadastro</title>
  <link rel="stylesheet" type="text/css" href="estilo1.css">
</head>
<body>
  <div class="container">
    <nav>
      <ul class="menu">
        <li>Cadastro</li>
      </ul>
    </nav> 
   <section>
     <h1>Cadatro de Usuários</h1>
     <hr><br><br>

     <?php

     if($linhas == 1){

     	print"Cadastro efetuado com sucesso";
     	}else{
     		print "Cadatro não efetuado o CPF ou E-mail já esta sendo utilizado por outra pessoa";
     	}     	

     ?>
   </section>
  </div>
</body>
</html>