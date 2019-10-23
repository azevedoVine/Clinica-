<?php include_once "topo.php";
      include_once "assets/classes/paciente/paciente.php";
      include_once "assets/classes/paciente/pacienteDao.php";
      
      if (isset($_POST['nome']) && $_POST['email'] != "") {

        $paciente = new Paciente();
        $paciente->setNome($_POST['nome']);
        $paciente->setTelefone($_POST['tel']);
        $paciente->setEmail($_POST['email']);
        $paciente->setEndereco($_POST['end']);
        $paciente->setNascimento($_POST['nasc']);
        $paciente->setLogin($_POST['login']);
        $paciente->setSenha($_POST['senha']);
        $paciente->setPerfil($_FILES['foto']['name']);
  
        $destino = 'assets/upload/' . $_FILES['foto']['name'];
 
        $arquivo_tmp = $_FILES['foto']['tmp_name'];
        
        move_uploaded_file( $arquivo_tmp, $destino );

        $pacienteDao = new PacienteDao();
        $msg = $pacienteDao->inserePaciente($paciente);
      }
        else{
          $msg = "Por favor, preencha os campos obrigatórios";
          }
?>

  <div class="tabela">
    <h1><?php echo $msg ?></h1>
    <a href="pacientes.php"><button class="botao-nova">Voltar</a>
  </div>

<?php 

  include_once "footer.php";
  ?>