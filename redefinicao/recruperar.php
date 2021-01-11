<html>
<?php
    date_default_timezone_set("America/Sao_Paulo");


    mysql_connect('sql313.unaux.com' 'unaux_27065308' 'nck0u9ngd8i57');
    mysql_selecr_db('unaux_27065308_contas');
?>
    <head>
        <meta charset="utf-8">
        <title>Recruperar Senha</title>
        <link rel="shortcut icon" type="image/x-icon" href="http://gamesstore.unaux.com//TCC/img/logo2.png">
    </head>
    <body>
    <?php
    if(isset($_POST['acao']) && $_POST['acao'] == 'recuperar');
        $email = strip_tags(filter_input(INPUT_POST, 'emailRecupera', FILTER_SANITIZE_STING));
        
        $verificar = mysql_query("SELECT email FROM usuarios WHERE email = $email");
        if(mysql_num_rows($verificar) == 1){

            $codigo = base64_encode($email);
            $data_expirar = date('Y-m-d H:i:s', strtotime('+1 day'));

            $mensagem = '<p>Olá recebemos sua solicitação de recuperção de senha para este E-mail, caso não tenha sido você desconsidere este E-mail caso contario clique no link abaixo 
            <br> <a href="http://gamesstore.unaux.com//TCC/recupera/senha.php?codigo='.$codigo.'">Clique AQUI</a></p>';

            $email_remetente = 'fernadasilva1991@gmail.com';            

            $headers = "Mine-Version: 1.1\n";
            $headers .= "Contect-type: text/html; charset=iso-8859-1\n";
            $headers .= "From; $email_remetente\n";
            $headers .= "Return-Path: $email_remetente\n";
            $headers .= "Reply-to: $email\n";
            
            $inserir = mysql_query("INSERT INTO 'codigos' SET codigo = '$codigo', data ='$data_expirar'");
            if($inserir){
            if(mail($email, "Assunto", "$mensagem", $headers, "-f$email_reetente")){
                echo 'Enviamos um E-mail para Você com um link com a recuperção de senha';
            }
          }
        }

    endif;
?>

        <form action="" method="POST" enctype="multipart/form-data">
            <?php
    if(isset($_GET['recuperar']) && $_GET['recuperar'] == 'sim'){
?>
<input type="text" name="emailrecupera" value />
<input type="hidden" name="acao" value="recuperar"/>
<input type="submit" value="Recrupera Senha"/>
<?php }else{?>
    <meta http-equiv="refresh" content="0;http://gamesstore.unaux.com/cadastro/sistemalogin.html"></meta>
        </form>
    </body>
</html>