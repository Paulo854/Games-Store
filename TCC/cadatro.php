<!DOCTYPE html>
<html>
<head>
  <title>Cadastro</title>
  <link rel="stylesheet" type="text/css" href="estilo1.css">
</head>
<body>
  <div class="container">
    <nav>
      <ul class="menu">
        <li>Cadastro</li>
      </ul>
    </nav> 
   <section>
     <h1>Cadatro de Usuários</h1>
     <hr><br><br>

     <form method="post" action="tcc.php">
       <input type="submit" value="Salvar" class="btn">
       <br><br>

      Nome<br> 
      <input type="text" name="Nome" class="campo" maxlength="40" required="required" autofocus>
      E-mail<br>
      <input type="text" name="email" class="campo" maxlength="50" required="required" autofocus>
      Senha<br>
      <input type="password" name="Senha" class="campo" maxlength="16" required="required" autofocus>
     </form>
   </section>
  </div>
</body>
</html>