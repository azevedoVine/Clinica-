<?php include_once "topo.php";
      include_once "assets/classes/dentista/dentista.php";
      include_once "assets/classes/dentista/dentistaDao.php";
      
      if (isset($_POST['nome']) && $_POST['cro'] != "") {

        $dentista = new Dentista();
        $dentista->setNome($_POST['nome']);
        $dentista->setCRO($_POST['cro']);
        $dentista->setEspecializacao($_POST['esp']);
        $dentista->setPerfil($_FILES['foto']['name']);
  
        $destino = 'assets/upload/' . $_FILES['foto']['name'];
 
        $arquivo_tmp = $_FILES['foto']['tmp_name'];
        
        move_uploaded_file( $arquivo_tmp, $destino );

        $dentistaDao = new DentistaDao();
        $msg = $dentistaDao->insereDentista($dentista);
      }
        else{
          $msg = "Por favor, preencha os campos obrigatórios";
          }
?>

  <div class="tabela">
    <h1><?php echo $msg ?></h1>
    <a href="dentistas.php"><button class="botao-nova">Voltar</a>
  </div>

<?php 

  include_once "footer.php";
  ?>