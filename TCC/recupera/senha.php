<?php
    mysql_connect('sql313.unaux.com' 'unaux_27065308' 'nck0u9ngd8i57');
    mysql_selecr_db('unaux_27065308_contas');
if(isset($_GET['codigo'])){
    $codigo = $_GET['codigo'];
    $email_codigo = base64_decode($codigo);
    

    $selecionar = mysql_query("SELECT * FROM 'codigos' WHERE codigo = '$codigo' and data >now()");
    if(mysql_num_rows($selecionar) => 1){
        if(isset($_POST['acao']) && $_POST['acao'] == 'mudar')
            $nova_senha = $_POST['novasenha'];

            $atualizar = mysql_query("UPDATE usuarios SET 'senha' = '$nova_senha' WHERE 'email' = '$email'");
            if($atualizar){
                $mudar = mysql_query("DELETE FROM 'codigos' WHERE codigo = '$codigo'");
                echo 'Sua senha foi modificada com sucesso';
            }
?>
        <h1>Digite Uma nova senha</h1>
        <form action="" method="POST" enctype="multipart/form-data">
        <input type="password" name="novasenha" value="" />
        
        <input type="hidden" name="acao" value="Mudar"/>
        <input type="submit" value="Mudar Senha"/>
        </form>

<?php
    }else{
        echo '<h1>Desulpe este link já expirou</h1>';
    }
}

