<?php include_once "topo.php";
      include_once "assets/classes/sobre/sobre.php";
      include_once "assets/classes/sobre/sobreDao.php";


      if (isset($_POST['id']) && $_POST['dia'] != "") {    

        $sobre = new Sobre();
        $sobre->setIdSobre($_POST['id']);
        $sobre->setDia($_POST['dia']);
        $sobre->setManha($_POST['manha']);
        $sobre->setTarde($_POST['tarde']);    
    
        $sobreDao = new SobreDao();
        $mensagem=$sobreDao->editaSobre($sobre);
    
        }else{
            $mensagem = "Por favor, preencha os campos obrigatórios";
        }
        
    ?>
    
        <div class="tabela">
        <h1><?php echo $mensagem ?></h1>
        <a href="sobre.php"><button class="botao-nova">Voltar</a>
        </div>
    
    <?php include_once "footer.php";
    ?>