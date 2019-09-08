<?php include_once "topo.php";
?>
			
		<section>
		<div class="container">
			<div class="menu-lateral">
				<p>Ordenar por:</p>
					<select name="filtros">
						<option value="padrao">Padrão</option>
						<option value="data-publi">Data de Publicação</option>
						<option value="autor">Autor</option>
						<option value="titulo">Titulo</option>                                    
					</select>		
			</div>		
			<!-- <div class="botao-novo">Nova Atualização </div> -->
			<div class="tabela">
					<table>
							<tr class="titulo-tabela">
							<th colspan="6">Consultas</th>
						  </tr>
						  <tr class="tr1">
							<th>Id</th>
							<th>Paciente</th>
							<th>Especialidade</th>
							<th>Data</th>
							<th>Dentista</th>
							<th>Ações</th>
						  </tr>
						  <tr>
							<td>1</td>
							<td>Paciente Tal</td>
							<td>AF</td>
							<td>12/06/2019</td>
							<td>Jalmas</td>
							<td> <a data-modal-target="#detalhe-consulta"><i class="fas fa-eye icone-tabela "></i></a></td>
						  </tr>
						  <tr>
								<td>2</td>
								<td>Paciente Tal</td>
								<td>F</td>
								<td>12/06/2019</td>
								<td>Gumercinda</td>
								<td> <a data-modal-target="#detalhe-consulta"><i class="fas fa-eye icone-tabela "></i></a></td>
						  </tr>
						  <tr>
								<td>3</td>
								<td>Paciente Tal</td>
								<td>A</td>
								<td>12/06/2019</td>
								<td>Gumercinda</td>
								<td> <a data-modal-target="#detalhe-consulta"><i class="fas fa-eye icone-tabela "></i></a></td>
						  </tr>
						  <tr>
								<td>4</td>
								<td>Paciente Tal</td>
								<td>A</td>
								<td>12/06/2019</td>
								<td>Jalma</td>
								<td> <a data-modal-target="#detalhe-consulta"><i class="fas fa-eye icone-tabela "></i></a></td>
						  </tr>
						  <tr>
								<td>5</td>
								<td>Paciente Tal</td>
								<td>A</td>
								<td>12/06/2019</td>
								<td>Joeferson</td>
								<td> <a data-modal-target="#detalhe-consulta"><i class="fas fa-eye icone-tabela "></i></a></td>
						  </tr>
						  <tr>
								<td>6</td>
								<td>Paciente Tal</td>
								<td>A</td>
								<td>12/06/2019</td>
								<td>Gumercinda</td>
								<td> <a data-modal-target="#detalhe-consulta"><i class="fas fa-eye icone-tabela "></i></a></td>
						  </tr>
						  <tr>
								<td>7</td>
								<td>Paciente Tal</td>
								<td>A</td>
								<td>12/06/2019</td>
								<td>Jalma</td>
								<td> <a data-modal-target="#detalhe-consulta"><i class="fas fa-eye icone-tabela "></i></a></td>
						  </tr>
						 
						  
						</table>
			
			</div>
		</div>
		</section>

		<div class="modal" id="detalhe-consulta">
                <div class="modal-header">
                  <div class="titulo negrito">Consulta</div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <article>
							<p><span class="negrito">Paciete: </span>Jurandir</p>
							<p><span class="negrito">Horário: </span>09-00</p>
							<p><span class="negrito">Dia: </span>01/12/1123</p>
							<p><span class="negrito">Dentista: </span>Jalma</p>
							
                    </article>
                </div>
            </div>
              <div id="overlay"></div>

<?php include_once "footer.php";
?>
