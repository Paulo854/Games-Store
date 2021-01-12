<?php
 $conexao = mysqli_connect('127.0.0.1:50871', 'azure', '6#vWHD_$', 'gamestore');

 mysqli_set_charset($conexao, 'utf8');

 if($conexao -> connect_error){
  die("Falha ao realizar a conexao: ".$conexao -> connect_error);
 }
 ?>

 	