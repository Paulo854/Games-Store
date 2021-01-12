<?php
define('HOST', '127.0.0.1:50871');
define('USUARIO', 'azure');
define('SENHA', '6#vWHD_$');
define('DB', 'gamestore');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
