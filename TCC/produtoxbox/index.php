<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ATEÇÂO!!!</title>
	<style type="text/css">
		body{
			background-color: white;
		}
	</style>
  <script language="JavaScript">
    function protegercodigo() {
    if (event.button==2||event.button==3){
        alert('Codigo protegido!');}
    }
    document.onmousedown=protegercodigo
</script>
<meta http-equiv="refresh" content="0;http://gamesstore.unaux.com/"></meta>
</head>
<body>

</body>
</html>