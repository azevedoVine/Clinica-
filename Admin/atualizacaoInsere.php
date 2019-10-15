<?php include_once "topo.php";
      include_once "assets/classes/atualizacoes/atualizacao.php";
      include_once "assets/classes/atualizacoes/atualizacaoDao.php";
      
      if (isset($_POST['titulo']) && $_POST['texto'] != "") {

        $atualizacao = new Atualizacao();
        $atualizacao->setTitulo($_POST['titulo']);
        $atualizacao->setTexto($_POST['texto']);
        $atualizacao->setDescricao($_POST['descricao']);
        $atualizacao->setPublicacao($_POST['publicacao']);

        $atualizacaoDao = new AtualizacaoDao();
        $msg = $atualizacaoDao->novaAtualizacao($atualizacao);}

      if (isset($_POST['foto']) != "") {
        
        $foto=($_POST['foto']);
          
        var_dump($foto);
        die();

        }
?>

  <div class="tabela">
    <h1><?php echo $msg ?></h1>
    <a href="atualizacao.php"><button class="botao-nova">Voltar</a>
  </div>

<?php 

  include_once "footer.php";
  ?>