<?php 
      include_once "entrar.php";
      include_once 'topo.php';
      include_once 'assets/classes/paciente/paciente.php';
      include_once 'assets/classes/paciente/pacienteDao.php';

      if (isset($_POST['id'])!= "") {    

        $paciente = new Paciente();
        $paciente->setIdPaciente($_POST['id']);  
    
        $pacienteDao = new PacienteDao();
        $mensagem=$pacienteDao->excluiPaciente($paciente);
    
        }

?>

<div class="tabela">
    <h1><?php echo $mensagem ?></h1>
    <a href="pacientes.php"><button class="botao-nova">Voltar</a>
  </div>

<?php include_once 'footer.php'; ?>