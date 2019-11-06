<?php 
      include_once "entrar.php";
      include_once "topo.php";      
      include_once 'assets\classes\administrador\administrador.php';
      include_once 'assets\classes\administrador\administradorDao.php';

      $adminDao = new AdminDao();

      $dados = $adminDao->listaAdmin();
?>
			
		<section>
            
        <div class="info-adm">
            <?php foreach ($dados as $administrador): ?>
                    <i class="fas fa-user foto-admin"></i>
                        <div class="dados-adm">
                            <p><span class="negrito">Nome: </span><?php echo $administrador['nome'] ?></p>
                            <p><span class="negrito">Email: </span><?php echo $administrador['email'] ?></p>
                            <p><span class="negrito">Categoria: </span><?php echo $administrador['categoria'] ?></p>
                            <a data-modal-target="#editar" class="edita-perfil" data-id="<?php echo $administrador['idAdmin']?>"
                                                                                 data-nome="<?php echo $administrador['nome']?>"
                                                                                 data-categoria="<?php echo $administrador['categoria']?>"
                                                                                 data-email="<?php echo $administrador['email'] ?>"
                                                                                 data-senha="<?php echo $administrador['senha'] ?>"
                                                                                 data-login="<?php echo $administrador['login'] ?>">Editar informações <i class="fas fa-edit"></i></a>
                        </div>
            <?php endforeach; ?>
        </div>
		
        </section>
        
        <div class="modal" id="editar">
					<div class="modal-header">
					  <div class="titulo negrito">Editar informações do Administrador</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div>
							<div class="editar-modal">
                  <form action="perfilEdita.php" method="POST">
                      <input type="hidden" id="id" name="id">      
                      <label>Nome:</label><input type="text" id="nome" name="nome">      
                      <label>Email:</label><input type="email" id="email" name="email">      
                      <label>Categoria:</label><input type="text" id="categoria" name="categoria">      
                      <label>Login:</label><input type="text" id="login-edita" name="login">      
                      <label>Senha:</label><input type="password" id="senha" name="senha">      
                          <button type="submit" data-close-button class="botao-editar">Editar</button>
                          <button data-close-button class="botao-editar">Cancelar</a>
                  </form>
							</div>
						</div>
					</div>
				</div>
				  <div id="overlay"></div>
<?php include_once "footer.php"?>

<script>
  $('.edita-perfil').on('click', function(){
    var id = $(this).data('id');
    var nome = $(this).data('nome');
    var categoria = $(this).data('categoria');
    var email = $(this).data('email');
    var login = $(this).data('login');
    var senha = $(this).data('senha');

    console.log(login)

    document.getElementById('id').value = id;
    document.getElementById('categoria').value = categoria;
    document.getElementById('email').value = email;
    document.getElementById('login-edita').value = login;
    document.getElementById('senha').value = senha;
    document.getElementById('nome').value = nome;

    
  });
  </script>