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
	<script type="text/javascript">
(function (global) { 

    if(typeof (global) === "undefined") {
        throw new Error("window is undefined");
    }

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

        // making sure we have the fruit available for juice (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {            
        noBackPlease();

        // disables backspace on page except on input fields and textarea..
        document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };          
    }

})(window);

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