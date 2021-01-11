<?php
session_start();
include('conecta.php');

if(empty($_POST['email']) || empty($_POST['cpf'])) {
	header('Location: teste.html');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['cpf']);

$query = "SELECT email, senha from usuarios where email = '{$email}' and cpf = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: senha.html');
	exit();
} else {
   echo "Registo não encontrado";
}

?>
<html>
    <head>
    <meta chasert="utf-8">
    <title>Recuperação</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://gamesstore.unaux.com//TCC/img/logo2.png">
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    font-size: 50px;

    width: 100%;
    height: 100%;

    background-color: #1a1a1a;

    display: flex;
    justify-content: center;
    align-items: center;
}
.hambuerger{
    width: 100px;
    height: 100px;

    border-radius: 10%;
}
.hambuerger:after{
    content: '';

    position: absolute;
    top: 30%;
    left: 15%;

    width: 30%;
    height: 10%;

    border-radius: 20px;

    background-color: #2a1a1a;

    transition: 1s ease;
}
.hambuerger:before{
    content: '';

    position: absolute;
    top: 20%;
    left: 15%;

    width: 40%;
    height: 10%;

    border-radius: 20px;

    background-color: #2a1a1a;

    transition: 1s ease;
}
#hambuerger:checked ~ label .hambuerger:after{
    transform: rotate(225deg);

    width: 40%;
    height: 10%;

    background-color: white;

    top: 45%;
    left: 15%;
}
#hambuerger:checked ~ label .hambuerger:before{
    transform: rotate(-405deg);

    width: 40%;
    height: 10%;

    background-color: white;

    top: 45%;
    left: 15%;
}
    </style>
    </head>
    <body>
        <input  id="hambuerger" type="checkbox" style="display:none;">

        <label for="hambuerger">
        <div class="hambuerger"></div>
</label>
        
</body>
</html>
