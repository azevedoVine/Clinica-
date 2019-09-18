<?php
			include_once 'topo.php';
		?>
<html>

            <section>
                <div class="container">
                    <div class="info-user">
                    <i class="fas fa-user foto-usuario"></i>
                        <div class="dados-user">
                            <p><span class="negrito">Nome: </span>Jenovevo Catarrinho</p>
                            <p><span class="negrito">Email: </span>Catarrinho@gmail.com</p>
                            <a data-modal-target="#editar" class="negrito mais-info-link">Editar informações <i class="fas fa-edit"></i></a>
                        </div>

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
                            <label>Nome:</label><input type="text" placeholder="Jenovevo Catarrinho">      
                            <label>Email:</label><input type="text" placeholder="Catarrinho@gmail.com">      
                               <div class="botoes-editar">
                                <button data-close-button class="botao-editar" onclick="confirmaEditar()">Editar</a>
                                <button data-close-button class="botao-editar-cancelar">Cancelar</a>
                               </div>
							</div>
						</div>
					</div>
				</div>
				  <div id="overlay"></div>
<?php
	include_once 'footer.php';
	?> 