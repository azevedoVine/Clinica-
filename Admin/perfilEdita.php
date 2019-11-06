<?php 
      include_once "entrar.php";
      include_once 'topo.php';
      include_once 'assets/classes/administrador/administrador.php';
      include_once 'assets/classes/administrador/administradorDao.php';

      if (isset($_POST['nome']) && $_POST['email'] != "") {    

        $administrador = new Administrador();
        $administrador->setIdAdmin($_POST['id']);
        $administrador->setNome($_POST['nome']);
        $administrador->setEmail($_POST['email']);
        $administrador->setCategoria($_POST['categoria']);
        $administrador->setLogin($_POST['login']);
        $administrador->setSenha(md5($_POST['senha']));

        $administradorDao = new AdminDao();
        $mensagem=$administradorDao->editaAdmin($administrador);
    
        }else{
        $mensagem = "Por favor, preencha os campos obrigatórios";
        }

?>

<div class="tabela">
    <h1><?php echo $mensagem ?></h1>
    <a href="perfil.php"><button class="botao-nova">Voltar</a>
  </div>

<?php include_once 'footer.php'; ?>