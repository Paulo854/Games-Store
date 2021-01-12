<?php
include('verifica_login.php');
?>

<h2>Olá,como uma forma de de segurança pedimos para que confirme que você gostaria<br> de está efetuando a comprar no e-mail: <?php echo $_SESSION['email'];?></h2>
<h2><a href="/cadastro/sistemalogin.html">Sair</a></h2>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comprar</title>
	<link rel="stylesheet" type="text/css" href="mdss.css">
<script type = "text/javascript">

		function preventBack(){window.history.forward();}
		
		setTimeout("preventBack()");
		
		window.onunload=function(){null};

</script>
</head>
<body>
<a href="/construção/construção.html">
	<span></span>
	<span></span>
	<span></span>
	<span></span>
	Efetuar Compra
	</a>
</body>
</html>