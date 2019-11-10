<?php
            include_once 'topo.php';
?>

<div class="container">
        <form action="cadastrar.php" enctype="multipart/form-data" method="POST" accept-charset="UTF-8">
    <div class="cadastra-left">                   
           <div>
            <label>Nome:</label><input required="true" type="text" name="nome" >      
            <label>Telefone:</label><input type="text" name="tel" >
            <label>Email:</label><input required="true" type="text" name="email" >
            <label>Endereço:</label><input type="text" name="end" >
            <label>Data de Nascimento:</label><input type="date" name="nasc" >
           </div>
           <div>
            <label>Foto de Perfil:</label><input type="file" name="foto">
            <label>Login:</label><input required="true" type="text" name="login">
            <label>Senha: </label> <input type="password" name="senha" id="inputSenha" minlength="6" required='true'/>
            <label>Confirmar senha: </label> <input type="password" name="senha2" id="inputSenha2"minlength="6" required='true'/> 
            </div>
            <button type="submit" class="botao-editar" id="inputSubmit">Cadastrar</button>
        </form>
    </div>

    <div class="login-right">
    <form action="verificaLogin.php" method="POST"> 
          <label>Login:</label><input type="text" class="input-login" name="login">      
          <label>Senha:</label><input type="password" class="input-login" name="senha">      
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