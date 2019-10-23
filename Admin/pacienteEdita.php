<?php include_once 'topo.php';
      include_once 'assets/classes/paciente/paciente.php';
      include_once 'assets/classes/paciente/pacienteDao.php';

      if (isset($_POST['nome']) && $_POST['email'] != "") {    

        $paciente = new Paciente();
        $paciente->setIdPaciente($_POST['id']);
        $paciente->setNome($_POST['nome']);
        $paciente->setEmail($_POST['email']);
        $paciente->setEndereco($_POST['end']);
        $paciente->setTelefone($_POST['tel']);
        $paciente->setNascimento($_POST['nasc']);
        $paciente->setPerfil($_POST['foto']);
  
    
        $pacienteDao = new PacienteDao();
        $mensagem=$pacienteDao->editaPaciente($paciente);
    
        }else{
        $mensagem = "Por favor, preencha os campos obrigatórios";
        }

?>

<div class="tabela">
    <h1><?php echo $mensagem ?></h1>
    <a href="pacientes.php"><button class="botao-nova">Voltar</a>
  </div>

<?php include_once 'footer.php'; ?>