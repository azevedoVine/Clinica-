<?php 
      include_once "entrar.php";
      include_once 'topo.php';
      include_once 'assets/classes/consulta/consulta.php';
      include_once 'assets/classes/consulta/consultaDao.php';

      if (isset($_POST['id'])!= "") {    

        $consulta = new Consulta();
        $consulta->setIdConsulta($_POST['id']);  
    
        $consultaDao = new ConsultaDao();
        $mensagem=$consultaDao->cancelaConsulta($consulta);
    
        }

?>

<div class="tabela">
    <h1><?php echo $mensagem ?></h1>
    <a href="consultas.php"><button class="botao-nova">Voltar</a>
  </div>

<?php include_once 'footer.php'; ?>