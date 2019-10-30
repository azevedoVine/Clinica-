<?php include_once "topo.php";
      include_once "assets/classes/consulta/consulta.php";
      include_once "assets/classes/consulta/consultaDao.php";
      
      if (isset($_POST['horario']) && $_POST['data'] != "") {

        $consulta = new Consulta();
        $consulta->setHorario($_POST['horario']);
        $consulta->setData($_POST['data']);
        $consulta->setPaciente($_POST['paciente']);
        $consulta->setDentista($_POST['dentista']);
        
        $consultaDao = new ConsultaDao();
        $msg = $consultaDao->novaConsulta($consulta);

        
      }
        else{
          $msg = "Por favor, preencha os campos obrigatórios";
          }
?>

  <div class="tabela">
    <h1><?php echo $msg ?></h1>
    <a href="novaconsulta.php"><button class="botao-nova">Voltar</a>
  </div>

<?php 

  include_once "footer.php";
  ?>