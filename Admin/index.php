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
		<img src="assets/img/logo.png" class="logo-login">
    </div>
    <div class="div-login">
      <form action="verificaLogin.php" method="POST">
        <label>E-mail:</label><input type="email" name="login">      
        <label>Senha:</label><input type="password" name="senha">      
                             <input type="submit" value="Entrar" id="entrar-login" class="botao-form">
      </form>
	</div>

</body>
</html>