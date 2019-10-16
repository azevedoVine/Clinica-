<?php include_once 'topo.php';
      include_once 'assets/classes/dentista/dentista.php';
      include_once 'assets/classes/dentista/dentistaDao.php';

      if (isset($_POST['id'])!= "") {    

        $dentista = new Dentista();
        $dentista->setIdDentista($_POST['id']);  
    
        $dentistaDao = new DentistaDao();
        $mensagem=$dentistaDao->excluiDentista($dentista);
    
        }

?>

<div class="tabela">
    <h1><?php echo $mensagem ?></h1>
    <a href="dentistas.php"><button class="botao-nova">Voltar</a>
  </div>

<?php include_once 'footer.php'; ?>