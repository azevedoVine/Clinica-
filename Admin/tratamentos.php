<?php include_once "topo.php";
?>
		<section>
		<div class="container">
			<div class="menu-lateral">
				<p>Ordenar por:</p>
					<select name="filtros">
						<option value="padrao">Padrão</option>
						<option value="data-publi">Data de Publicação</option>
						<option value="descricao">Descrição</option>
						<option value="titulo">Titulo</option>                                    
					</select>		
			</div>		

			<div class="tabela">
			<table id="playlistTable">
            <a data-modal-target="#inserir"><button class="botao-nova">Novo Tratamento</button></a>
            <caption class="titulo-tabela">Tratamentos</caption>
            <thead>
              <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Data</th>
                <th colspan="2">Ações</th>

              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>Hide You</td>
                <td>Kosheen</td>
                <td>01/09/1990</td>
                <td><a data-modal-target="#editar"><i class="fas fa-pen icone-tabela "></i></a></td>
                <td><a data-modal-target="#excluir"><i class="fas fa-trash-alt icone-tabela "></i></a></td>
              </tr>

              <tr>
                <td>2</td>
                <td>.38.45</td>
                <td>Thievery Corporation</td>
                <td>01/09/1990</td>
                <td><a data-modal-target="#editar"><i class="fas fa-pen icone-tabela "></i></a></td>
                <td><a data-modal-target="#excluir"><i class="fas fa-trash-alt icone-tabela "></i></a></td>
              </tr>

              <tr>
                <td>3</td>
                <td>Fix You</td>
                <td>Coldplay</td>
                <td>01/09/1990</td>
                <td><a data-modal-target="#editar"><i class="fas fa-pen icone-tabela "></i></a></td>
                <td><a data-modal-target="#excluir"><i class="fas fa-trash-alt icone-tabela "></i></a></td>
              </tr>

              <tr>
                <td>4</td>
                <td>Maps</td>
                <td>Yeah Yeah Yeahs</td>
                <td>01/09/1990</td>
                <td><a data-modal-target="#editar"><i class="fas fa-pen icone-tabela "></i></a></td>
                <td><a data-modal-target="#excluir"><i class="fas fa-trash-alt icone-tabela "></i></a></td>
              </tr>

              <tr>
                <td>5</td>
                <td>Ask me how I am</td>
                <td>Snow Patrol</td>
                <td>01/09/1990</td>
                <td><a data-modal-target="#editar"><i class="fas fa-pen icone-tabela "></i></a></td>
                <td><a data-modal-target="#excluir"><i class="fas fa-trash-alt icone-tabela "></i></a></td>
              </tr>

              <tr>
                <td>6</td>
                <td>PMT</td>
                <td>Deeper Water</td>
                <td>01/09/1990</td>
                <td><a data-modal-target="#editar"><i class="fas fa-pen icone-tabela "></i></a></td>
                <td><a data-modal-target="#excluir"><i class="fas fa-trash-alt icone-tabela "></i></a></td>
              </tr>  
            </tbody>
          </table>
			
			</div>
		</div>
		</section>

		<div class="modal" id="excluir">
                <div class="modal-header">
                  <div class="titulo negrito">Excluir</div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <article>
							<p>Tem certeza que deseja excluir "Tratamento Tal"?</p>
							<button data-close-button class="botao-editar" onclick="confirmaExcluir()">Excluir</a>
              <button data-close-button class="botao-editar">Cancelar</a>
                    </article>
                </div>
            </div>
              <div id="overlay"></div>
    
    <div class="modal" id="editar">
					<div class="modal-header">
					  <div class="titulo negrito">Editar informações do Tratamento</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div>
							<div class="editar-modal">
                            <label>Titulo:</label><input type="text" placeholder="Tratamento BHJK">      
                            <label>Descrição:</label><input type="text" placeholder="É um legal">      
                            <label>Data:</label><input type="text" placeholder="XX/XX/XXXX">      
                                <button data-close-button class="botao-editar" onclick="confirmaEditar()">Editar</a>
                                <button data-close-button class="botao-editar">Cancelar</a>
							</div>
						</div>
					</div>
				</div>
          <div id="overlay"></div>
    
    <div class="modal" id="inserir">
					<div class="modal-header">
					  <div class="titulo negrito">Inserir Tratamento</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div class="inserir-modal">
						<form>                   
                            <label>Titulo:</label><input type="text">      
                            <label>Descrição:</label><textarea type="text" class="textarea-inserir"></textarea>      
                            <button onclick="confirmaInserir()" class="botao-editar">Inserir</a>
                            <button data-close-button class="botao-editar-cancelar">Cancelar</a>
            </form>
						</div>
					</div>
				</div>
				  <div id="overlay"></div>

			  <?php include_once "footer.php";
?>