<?php include_once "topo.php";
?>
			
		<section>
            
        <div class="info-adm">
                    <i class="fas fa-user foto-admin"></i>
                        <div class="dados-adm">
                            <p><span class="negrito">Nome: </span>Marcinha Abelar</p>
                            <p><span class="negrito">Email: </span>Marcinhasurfista@gmail.com</p>
                            <p><span class="negrito">Categoria: </span>Super User</p>
                            <a data-modal-target="#editar" class="editar-perfil">Editar informações <i class="fas fa-edit"></i></a>
                        </div>
        </div>
		
        </section>
        
        <div class="modal" id="editar">
					<div class="modal-header">
					  <div class="titulo negrito">Editar informações do Administrador</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div>
							<div class="editar-modal">
                            <label>Nome:</label><input type="text" placeholder="Marcinha Abelar">      
                            <label>Email:</label><input type="text" placeholder="Marcinhasurfista@gmail.com">      
                                <button data-close-button class="botao-editar" onclick="confirmaEditar()">Editar</a>
                                <button data-close-button class="botao-editar">Cancelar</a>
							</div>
						</div>
					</div>
				</div>
				  <div id="overlay"></div>
<?php include_once "footer.php"

?>