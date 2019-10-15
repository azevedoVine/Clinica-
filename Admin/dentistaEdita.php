<?php include_once 'topo.php';
      include_once 'assets/classes/dentista/dentista.php';
      include_once 'assets/classes/dentista/dentistaDao.php';

      if (isset($_POST['nome']) && $_POST['cro'] != "") {    

        $dentista = new Dentista();
        $dentista->setIdDentista($_POST['id']);
        $dentista->setCRO($_POST['titulo']);
        $dentista->setNome($_POST['texto']);
        $dentista->setPerfil($_POST['descricao']);
  
    
        $dentistaDao = new DentistaDao();
        $mensagem=$dentistaDao->editaDentista($dentista);
    
        }

?>