<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['Messagem'];
$connect = mysql_connect('sql313.unaux.com','unaux_27065308','nck0u9ngd8i57');
$db = mysql_select_db('unaux_27065308_mensagem');

        $query = "INSERT INTO mensagem_contatos (nome,email,mensagem, created) VALUES ('$nome','$email','$msg', NOW())";
        $insert = mysql_query($query,$connect);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ENVIOU</title>
	<meta http-equiv="refresh" content="0;http://www.gamesstore.unaux.com/"></meta>
	<link rel="shortcut icon" type="image/x-icon" href="http://gamesstore.unaux.com//TCC/img/logo2.png">
</head>
<body>

</body>
</html>