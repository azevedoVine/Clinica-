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
      <form action="verificaLogin.php" method="POST" id="cu">
        <label>E-mail:</label><input type="text" name="login">      
        <label>Senha:</label><input type="password" name="senha">      
        <div class="g-recaptcha" data-sitekey="6Lc-xMIUAAAAAPwl9qISDZLoKLAEaEZcitF8gozp" id="g-recaptcha-response"></div>
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

<script>
    window.onload = function() {
    var recaptcha = document.forms["cu"]["g-recaptcha-response"];
    recaptcha.required = true;
    recaptcha.oninvalid = function(e) {    alert("Por favor complete o captchaba");
      }
   }
   </script>
   
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>