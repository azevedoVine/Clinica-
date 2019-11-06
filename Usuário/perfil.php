<?php
			include_once 'topo.php';
			include_once 'assets\classes\paciente\paciente.php';
			include_once 'assets\classes\paciente\pacienteDao.php';

        $idPaciente = 4;

        $paciente = new Paciente();

        $paciente->setIdPaciente($idPaciente);

        $pacienteDao = new PacienteDao();        

		$dados=$pacienteDao->listaPacientesID($paciente);

		?>
<html>

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
                                                                             data-senha="<?php echo $perfilPaciente['senha'] ?>"
                                                                             data-nasc="<?php echo $perfilPaciente['nascimento'] ?>"
                                                                             data-foto="<?php echo $perfilPaciente['fotoPerfil']?>">Editar informações <i class="fas fa-edit"></i></a>
                        </div>
                <?php endforeach;?>
                        <div id="caleandar">

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
                                        <label>Senha:</label><input type="password" id="senha" name="senha">            
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
    var nome = $(this).data('nome');
    var id = $(this).data('id');
    var tel = $(this).data('tel');
    var email = $(this).data('email');
    var end = $(this).data('end');
    var nasc = $(this).data('nasc');
    var foto = $(this).data('foto');
    var login = $(this).data('login');
    var senha = $(this).data('senha');

    document.getElementById('tel').value = tel;
    document.getElementById('id-edita').value = id;
    document.getElementById('email').value = email;
    document.getElementById('end').value = end;
    document.getElementById('nasc').value = nasc;
    document.getElementById('nome').value = nome;
    document.getElementById('login-edita').value = login;
    document.getElementById('senha').value = senha;
    document.getElementById('foto').src = "../Admin/assets/upload/"+foto;

    
  });

</script>