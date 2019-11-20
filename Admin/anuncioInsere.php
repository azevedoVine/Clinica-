<?php 
      include_once "entrar.php";
      include_once "topo.php";
      include_once "assets/classes/anuncios/anuncio.php";
      include_once "assets/classes/anuncios/anuncioDao.php";
      
      if (isset($_POST['nome']) != "") {

        $anuncio = new Anuncio();
        $anuncio->setNome($_POST['nome']);
        $anuncio->setSrc($_FILES['foto']['name']);
  
        $destino = 'assets/upload/' . $_FILES['foto']['name'];
 
        $arquivo_tmp = $_FILES['foto']['tmp_name'];
        
        move_uploaded_file( $arquivo_tmp, $destino );

        $anuncioDao = new AnuncioDao();
        $msg = $anuncioDao->novoAnuncio($anuncio);
      }
        else{
          $msg = "Por favor, preencha os campos obrigatórios";
          }
?>

  <div class="tabela">
    <h1><?php echo $msg ?></h1>
    <a href="anuncios.php"><button class="botao-nova">Voltar</a>
  </div>

<?php 

  include_once "footer.php";
  ?>