<?php include_once "topo.php";
      include_once "assets/classes/tratamentos/tratamento.php";
      include_once "assets/classes/tratamentos/tratamentoDao.php";
      
      if (isset($_POST['titulo']) && $_POST['texto'] != "") {

        $tratamento = new Tratamento();
        $tratamento->setTitulo($_POST['titulo']);
        $tratamento->setTexto($_POST['texto']);
        $tratamento->setDescricao($_POST['descricao']);
        $tratamento->setPublicacao($_POST['publicacao']);
        $tratamento->setImagem($_FILES['foto']['name']);
  
        $destino = 'assets/upload/' . $_FILES['foto']['name'];
 
        $arquivo_tmp = $_FILES['foto']['tmp_name'];
        
        move_uploaded_file( $arquivo_tmp, $destino );
        $tratamentoDao = new tratamentoDao();
        $msg = $tratamentoDao->insereTratamento($tratamento);
      }
        else{
          $msg = "Por favor, preencha os campos obrigatórios";
          }
?>

  <div class="tabela">
    <h1><?php echo $msg ?></h1>
    <a href="tratamentos.php"><button class="botao-nova">Voltar</a>
  </div>

<?php 

  include_once "footer.php";
  ?>