<?php
include_once("conecta.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "SELECT * FROM usuarios WHERE nome LIKE '%$filtro%'";
$consulta = mysqli_query($conexao,$sql);
$registros =  mysqli_num_rows($consulta);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registo do Usuario</title>
        <link rel="shortcut icon" type="image/x-icon" href="http://gamesstore.unaux.com//TCC/img/logo2.png">
    </head>
    <body>
        <div class="box">
        <?php

            print "<h1>Registros Encontrado</h1>";

            print "<br><br>";

            while($exibirRegistros = mysqli_fetch_array($consulta)){

                $codigo = $exibirRegistros[0];
                $nome = $exibirRegistros[1];
                $login = $exibirRegistros[2];
                $email = $exibirRegistros[4];
                $cpf = $exibirRegistros[5];
                $admin = $exibirRegistros[6];
                $bloqueado = $exibirRegistros[7];
                $data = $exibirRegistros[8];

                print "<article>";

                print "<h4>Codígo do usuario:</h4>$codigo<br>";
                print "<h4>Nome do Usuario:</h4>$nome<br>";
                print "<h4>Login Do usuario:</h4>$login<br>";
                print "<h4>E-mail do usuario:</h4>$email<br>";
                print "<h4>CPF você não pode ver desculpe:</h4>$cpf<br>";
                print "<h4>Se o usuario for ADM vai está TRUE:</h4>$admin<br>";
                print "<h4>Se a conta do usuario está Bloqueada</h4>$bloqueado";
                print "<h4>Data de Criação</h4>$data";


                print "</article>";

            }
            mysqli_closed($conexao);
       ?>
       </div>
    </body>
</html>