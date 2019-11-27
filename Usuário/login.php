<html>
    <head>
            <title>Clínica ABC - Login</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="assets/css/style.css">
            <link rel="stylesheet" type="text/css" href="assets/css/all.css">
            <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icone-browser.png">

        </head>
<body>

    <div class='div-login'>
		<img src="assets/img/logo-inteiro.png" class="logo-login">
    </div>
    <div class="div-login">
      <form action="verificaLogin.php" method="POST"> 
          <label>E-mail:</label><input type="text" class="input-escolha" name="login">      
          <label>Senha:</label><input type="password" class="input-escolha" name="senha">      
                              <input type="submit" value="Entrar" id="entrar-login" class="botao-form">
      </form>
      <p>
      <?php session_start();
       if(empty($_SESSION['erro'])){

       }else{
         echo $_SESSION['erro'];
       }?></p>
	</div>

</body>
</html>