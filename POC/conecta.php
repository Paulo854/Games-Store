<?php
 $conexao = mysqli_connect('sql101.unaux.com', 'unaux_26935305', 's53ykvtj', 'unaux_26935305_tcc');

 mysqli_set_charset($conexao, 'utf8');

 if($conexao -> connect_error){
  die("Falha ao realizar a conexao: ".$conexao -> connect_error);
 }
 ?>