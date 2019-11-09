<?php
			include_once 'topo.php';
			include_once 'assets\classes\paciente\paciente.php';
            include_once 'assets\classes\paciente\pacienteDao.php';
            include_once 'assets\classes\consulta\consultaDao.php';
            include_once 'entrar.php';

        $idPaciente = $_SESSION['id'];

        $paciente = new Paciente();

        $paciente->setIdPaciente($idPaciente);

        $pacienteDao = new PacienteDao();        

        $dados=$pacienteDao->listaPacientesID($paciente);
        
        $consultaDao = new consultaDao();        

        $dados1=$consultaDao->listaConsultasID($idPaciente);

		?>
            <section>
                <div class="container">
                <?php foreach ($dados as $perfilPaciente):?>
                    <div class="info-user">
                    <img src="../Admin/assets/upload/<?php echo $perfilPaciente['fotoPerfil']; ?>" class="foto-perfil">
                        <div class="dados-user">
                            <p><span class="negrito">Nome: </span><?php echo $perfilPaciente['nome']; ?></p>
                            <p><span class="negrito">Email: </span><?php echo $perfilPaciente['email']; ?></p>
                            <a data-modal-target="#editar" class="edita-paciente negrito mais-info-link" data-id="<?php echo $perfilPaciente['idPaciente']?>"
                                                                             data-nome="<?php echo $perfilPaciente['nome']?>"
                                                                             data-tel="<?php echo $perfilPaciente['telefone']?>"
                                                                             data-email="<?php echo $perfilPaciente['email'] ?>"
                                                                             data-end="<?php echo $perfilPaciente['endereco'] ?>"
                                                                             data-login="<?php echo $perfilPaciente['login'] ?>"
                                                                             data-nasc="<?php echo $perfilPaciente['nascimento'] ?>"
                                                                             data-foto="<?php echo $perfilPaciente['fotoPerfil']?>">Editar informações <i class="fas fa-edit"></i></a>
                        </div>
                <?php endforeach;?>
                        <div id="caleandar">
                            <button class="text" data-teo="<?php print_r($dados1)?>">Ver Consultas</button>
                            <div id="container-calendario"></div>
                        </div>
                        
                    </div>
                   
                    <div class="propaganda-tratamento">
                        <p class="titulo negrito">Tratamentos</p>
                        <div class="propaganda-individual">
                            <p class="sub-titulo negrito">Clareamento</p>
                            <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho.</p>
                            <img src="assets/img/clareamento.jpg" class="foto-propaganda">
                        </div>
                        <div class="propaganda-individual">
                            <p class="sub-titulo negrito">Aparelho Odontológico</p>
                            <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho.</p>
                            <img src="assets/img/aparelho-ortodontico.jpg" class="foto-propaganda">
                            <a href="tratamentos.html"><button class='vejamais tratamento-botao'>Veja mais</button></a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="modal" id="editar">
					<div class="modal-header">
					  <div class="titulo negrito">Editar informações do Perfil</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div>
							<div class="editar-modal">
                            <form action="perfilEdita.php" method="POST">
                                <input type="hidden" id="id-edita" name="id">
                                
                                <div class="form-edita-perfil">
                                    <div>
                                        <img id="foto" name="foto" width="100px">
                                    </div>      
                                    <div>
                                        <label>Nome:</label><input type="text" id="nome" name="nome">           
                                        <label>Endereço:</label><input type="text" id="end" name="end">
                                        <label>Telefone:</label><input type="text" id="tel" name="tel">      
                                        <label>Data de Nascimento:</label><input type="text" id="nasc" name="nasc">            
                                    </div>
                                    <div>
                                        <label>Email:</label><input type="text" id="email" name="email"> 
                                        <label>Login:</label><input type="text" id="login-edita" name="login">      
                                        <label>Senha:</label><input type="password" name="senha">            
                                    </div>
                                </div>
                                <div class="botoes-editar">
                                    <button type="submit" data-close-button class="botao-editar">Editar</a>
                                    <button data-close-button class="botao-editar-cancelar">Cancelar</a>
                                </div>
                            </form>
							</div>
						</div>
					</div>
				</div>
				  <div id="overlay"></div>
<?php
	include_once 'footer.php';
    ?> 

<script>
  $('.edita-paciente').on('click', function(){

    //var texte = $(this).data('texte');
    var nome = $(this).data('nome');
    var id = $(this).data('id');
    var tel = $(this).data('tel');
    var email = $(this).data('email');
    var end = $(this).data('end');
    var nasc = $(this).data('nasc');
    var foto = $(this).data('foto');
    var login = $(this).data('login');

    //console.log(texte);

    document.getElementById('tel').value = tel;
    document.getElementById('id-edita').value = id;
    document.getElementById('email').value = email;
    document.getElementById('end').value = end;
    document.getElementById('nasc').value = nasc;
    document.getElementById('nome').value = nome;
    document.getElementById('login-edita').value = login;
    document.getElementById('foto').src = "../Admin/assets/upload/"+foto;

    
  });

  $('.text').on('click', function(){
    var teo = $(this).data('teo');

    return teo;
  });

  var ter = "hh";

  $('#container-calendario').fullCalendar({
  header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay,listWeek'
  },
  defaultDate: '2019-01-12',
  navLinks: true, // can click day/week names to navigate views
  editable: true,
  eventLimit: true, // allow "more" link when too many events
  events: [
    {
      title: ter,
      start: '2019-01-01',
    },
    {
      title: 'Long Event',
      start: '2019-01-07',
      end: '2019-01-10'
    },
    {
      id: 999,
      title: 'Repeating Event',
      start: '2019-01-09T16:00:00'
    },
    {
      id: 999,
      title: 'Repeating Event',
      start: '2019-01-16T16:00:00'
    },
    {
      title: 'Mutei',
      start: '2019-11-11',
      end: '2019-11-13'
    },
    {
      title: 'Meeting',
      start: '2019-01-12T10:30:00',
      end: '2019-01-12T12:30:00'
    },
    {
      title: 'Lunch',
      start: '2019-01-12T12:00:00'
    },
    {
      title: 'Meeting',
      start: '2019-01-12T14:30:00'
    },
    {
      title: 'Happy Hour',
      start: '2019-01-12T17:30:00'
    },
    {
      title: 'Dinner',
      start: '2019-01-12T20:00:00'
    },
    {
      title: 'Birthday Party',
      start: '2019-01-13T07:00:00'
    },
    {
      title: 'Click for Google',
      url: 'http://google.com/',
      start: '2019-01-28'
    }
  ]
});    
    
</script>