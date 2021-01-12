<?php
session_start();
include('conecta.php');

public function nt_RedirectLocation($location, $status, $external_url){
	$this->setLocation($location);
	$this->setStatus($status);
	$this->setExternalUrl($external_url);

	if(null !== $this->getLocation() &&  $this->getStatus() == false){
	  //header('location:'.$this->getLocation(), true);
	  echo $this->getLocation();
	}elseif(null !== $this->getLocation() && $this->getStatus() == true){
	 
	  foreach($this->getStatus() as $date => $value){
		
		if($date == 2 && $this->getStatus()['2'] == true && $_SERVER['REMOTE_ADDR'] == $this->getStatus()['1']){
		  header('location: '.$this->getLocation().'/?'.$this->getStatus()['0'], true);
		 }elseif($date == 1){
		  echo 'Usuario com ip: ' .$value. ' tem permissão<br>';
		  echo 'meu ip é: ' .$_SERVER['REMOTE_ADDR'];
		 }
		
	  }
	}
	elseif($this->getLocation() == false && null !==($this->getExternalUrl())){
	  header('location:'.$this->getExternalUrl(), true);

if(empty($_POST['email']) || empty($_POST['cpf'])) {
	header('Location: verificação-2.html');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['cpf']);

$query = "SELECT email, cpf from usuarios where email = md5('{$email}') and cpf = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: painel.html');
	exit();
} else {
   echo "VOCÊ NÃO TEM ACESSO AQUI!!!!";
}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Verificação</title>
<style type="text/css">
	body{
		background-color: white;
	}
</style>
</head>
<body>

</body>
</html>