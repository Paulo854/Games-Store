<?php

include_once("conexao.php");

$Nome = $_POST['Nome'];
$email = $_POST['email'];
$Senha = $_POST['Senha'];

$sql = "INSERT INTO usuarios (Nome,email,Senha) VALUES ('$Nome','$email','$Senha')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>


<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <title>Games Store</title>
  <link rel="stylesheet" href="estilo.css">
 </head>
 <body>
  <div class="container">
   <nav>
    </ul>
   </nav>
   <section>
    <h1>Confirmação de Cadastro</h1>
    <hr><br>
    <a href="login.php"></a>
    <?php

    if($linhas == 1){
     print "Cadastro Efetuado com Sucesso!";
    }else{
     print "Cadastro Nao Realizado! já existe um usuario com este E-mail";
    }

    ?>

   </section>
 </body>
</html>