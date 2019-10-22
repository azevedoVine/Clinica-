<?php include_once 'topo.php';
      include_once 'assets/classes/dentista/dentista.php';
      include_once 'assets/classes/dentista/dentistaDao.php';

      if (isset($_POST['nome']) && $_POST['cro'] != "") {    

        $dentista = new Dentista();
        $dentista->setIdDentista($_POST['id']);
        $dentista->setCRO($_POST['cro']);
        $dentista->setNome($_POST['nome']);
        $dentista->setEspecializacao($_POST['esp']);
        $dentista->setPerfil($_POST['foto']);
  
    
        $dentistaDao = new DentistaDao();
        $mensagem=$dentistaDao->editaDentista($dentista);
    
        }else{
        $mensagem = "Por favor, preencha os campos obrigatórios";
        }

?>

<div class="tabela">
    <h1><?php echo $mensagem ?></h1>
    <a href="dentistas.php"><button class="botao-nova">Voltar</a>
  </div>

<?php include_once 'footer.php'; ?>