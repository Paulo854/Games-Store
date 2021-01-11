<?php

$hostname = "sql101.unaux.com";
$user = "unaux_26935305";
$password = "s53ykvtj";
$database = "unaux_26935305_tcc";
$conexao = mysqli_connect($hostname, $user, $password, $database);
	
if(!$conexao) {
 echo "Falha na conexão!";
}
?>