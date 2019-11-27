<?php
            include_once 'topo.php';
?>

<div class="container">
        <form action="cadastrar.php" enctype="multipart/form-data" method="POST" accept-charset="UTF-8">
        <h2>Não possui cadastro ainda? Cadastre-se agora!</h2> 
        <div class="cadastra-left">                  
           <div>
            <label>Nome:</label><input required="true" type="text" name="nome" class="input-escolha">      
            <label>Telefone:</label><input type="text" name="tel" class="input-escolha">
            <label>Email:</label><input required="true" type="text" name="email" class="input-escolha">
            <label>Endereço:</label><input type="text" name="end" class="input-escolha">
            <label>Data de Nascimento:</label><input type="date" name="nasc" class="input-escolha">
           </div>
           <div class="cadastrar-2">
            <label>Foto de Perfil:</label><input type="file" name="foto" class="input-escolha">
            <label>Login:</label><input required="true" type="text" name="login" class="input-escolha">
            <label>Senha: </label> <input type="password" name="senha" id="inputSenha" minlength="6" required='true' class="input-escolha"/>
            <label>Confirmar senha: </label> <input type="password" name="senha2" id="inputSenha2"minlength="6" required='true' class="input-escolha"/>
            <button type="submit" class="botao-editar" id="inputSubmit">Cadastrar-se</button>
            </div>
            
        </form>
    </div>

    <div class="login-right">
    <h2>Faça login</h2> 
    <form action="verificaLogin.php" method="POST"> 
          <label>Login:</label><input type="text" class="input-escolha" name="login">      
          <label>Senha:</label><input type="password" class="input-escolha" name="senha">      
                              <input type="submit" value="Logar" id="entrar-login" class="botao-form">
      </form>
      <p>
      <?php 
       if(empty($_SESSION['erro'])){

       }else{
         echo $_SESSION['erro'];
       }?></p>
    </div>
</div>

<?php
            include_once 'footer.php';
?>

<script>
  $(function(){
	$("#inputSubmit").click(function(){
      var senha = $("#inputSenha").val();
      var senha2 = $("#inputSenha2").val();
      if(senha != senha2){
        event.preventDefault();
      	alert("As senhas preenchidas não são iguais!");
      }
    });
  });
</script>