<?php include_once "topo.php";
      include_once "assets/classes/atualizacoes/atualizacao.php";
      include_once "assets/classes/atualizacoes/atualizacaoDao.php";
      
      if (isset($_POST['titulo']) && $_POST['texto'] != "") {

        $atualizacao = new Atualizacao();
        $atualizacao->setTitulo($_POST['titulo']);
        $atualizacao->setTexto($_POST['texto']);
        $atualizacao->setDescricao($_POST['descricao']);
        $atualizacao->setPublicacao($_POST['publicacao']);
        $atualizacao->setImagem($_FILES['foto']['name']);
  
        $destino = 'assets/upload/' . $_FILES['foto']['name'];
 
        $arquivo_tmp = $_FILES['foto']['tmp_name'];
        
        move_uploaded_file( $arquivo_tmp, $destino );

        $atualizacaoDao = new AtualizacaoDao();
        $msg = $atualizacaoDao->novaAtualizacao($atualizacao);
      }
        else{
          $msg = "Por favor, preencha os campos obrigatórios";
          }
?>

  <div class="tabela">
    <h1><?php echo $msg ?></h1>
    <a href="atualizacao.php"><button class="botao-nova">Voltar</a>
  </div>

<?php 

  include_once "footer.php";
  ?>