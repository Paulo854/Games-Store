<?php
 $conexao = mysqli_connect('sql313.unaux.com', 'unaux_27065308', 'nck0u9ngd8i57', 'unaux_27065308_contas');

 mysqli_set_charset($conexao, 'utf8');

 if($conexao -> connect_error){
  die("Falha ao realizar a conexao: ".$conexao -> connect_error);
 }
 ?>