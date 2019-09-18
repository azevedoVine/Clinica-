<?php include_once "topo.php";
?>
			
		<section>
        <div class="container">
			<div class="menu-lateral">
				<p>Ordenar por:</p>
					<select name="filtros">
						<option value="padrao">Padrão</option>
						<option value="manha">Manhã</option>
						<option value="tarde">Tarde</option>                                  
					</select>		
            </div>		
            			
		<div class="tabela">
			<table id="playlistTable">
            <caption class="titulo-tabela">Horários de Funcionamento</caption>
            <thead>
              <tr>
                <th>Dia</th>
                <th>Manhã</th>
                <th>Tarde</th>
                <th>Ação</th>

              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Segunda-Feira</td>
                <td>08:00 - 12:00</td>
                <td>14:00 - 18:00</td>
                <td><a data-modal-target="#editar"><i class="fas fa-pen icone-tabela "></i></a></td>
              </tr>

              <tr>
                <td>Terça-Feira</td>
                <td>08:00 - 12:00</td>
                <td>14:00 - 18:00</td>
                <td><a data-modal-target="#editar"><i class="fas fa-pen icone-tabela "></i></a></td>
              </tr>

              <tr>
                <td>Quarta-Feira</td>
                <td>08:00 - 12:00</td>
                <td>14:00 - 18:00</td>
                <td><a data-modal-target="#editar"><i class="fas fa-pen icone-tabela "></i></a></td>
              </tr>

              <tr>
                <td>Quinta-Feira</td>
                <td>08:00 - 12:00</td>
                <td>14:00 - 18:00</td>
                <td><a data-modal-target="#editar"><i class="fas fa-pen icone-tabela "></i></a></td>
              </tr>

              <tr>
                <td>Sexta-Feira</td>
                <td>08:00 - 12:00</td>
                <td>14:00 - 18:00</td>
                <td><a data-modal-target="#editar"><i class="fas fa-pen icone-tabela "></i></a></td>
              </tr>
            </tbody>
          </table>
        </section>
        
        <div class="modal" id="editar">
					<div class="modal-header">
					  <div class="titulo negrito">Editar informações do Tratamento</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div>
							<div class="editar-modal">     
                            <label>Manhã - Abertura:</label><input type="time">
                            <label>Manhã - Fechamento:</label><input type="time">         
                            <label>Tarde - Abertura:</label><input type="time">
                            <label>Tarde - Fechamento:</label><input type="time">        
                                <button data-close-button class="botao-editar" onclick="confirmaEditar()">Editar</a>
                                <button data-close-button class="botao-editar">Cancelar</a>
							</div>
						</div>
					</div>
				</div>
          <div id="overlay"></div>

<?php include_once "footer.php"

?>