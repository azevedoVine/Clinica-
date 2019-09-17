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
			<!-- <div class="botao-novo">Nova Atualização </div> -->
			<div class="tabela">
			<table id="playlistTable">
            <caption>Tratamentos</caption>
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
                <td> <i class="fas fa-pen icone-tabela "></i><a data-modal-target="#excluir"></td>
                <td><i class="fas fa-trash-alt icone-tabela "></i></a></td>
              </tr>

              <tr>
                <td>2</td>
                <td>.38.45</td>
                <td>Thievery Corporation</td>
                <td>01/09/1990</td>
                <td> <i class="fas fa-pen icone-tabela "></i><a data-modal-target="#excluir"></td>
                <td><i class="fas fa-trash-alt icone-tabela "></i></a></td>
              </tr>

              <tr>
                <td>3</td>
                <td>Fix You</td>
                <td>Coldplay</td>
                <td>01/09/1990</td>
                <td> <i class="fas fa-pen icone-tabela "></i><a data-modal-target="#excluir"></td>
                <td><i class="fas fa-trash-alt icone-tabela "></i></a></td>
              </tr>

              <tr>
                <td>4</td>
                <td>Maps</td>
                <td>Yeah Yeah Yeahs</td>
                <td>01/09/1990</td>
                <td> <i class="fas fa-pen icone-tabela "></i><a data-modal-target="#excluir"></td>
                <td><i class="fas fa-trash-alt icone-tabela "></i></a></td>
              </tr>

              <tr>
                <td>5</td>
                <td>Ask me how I am</td>
                <td>Snow Patrol</td>
                <td>01/09/1990</td>
                <td> <i class="fas fa-pen icone-tabela "></i><a data-modal-target="#excluir"></td>
                <td><i class="fas fa-trash-alt icone-tabela "></i></a></td>
              </tr>

              <tr>
                <td>6</td>
                <td>PMT</td>
                <td>Deeper Water</td>
                <td>01/09/1990</td>
                <td> <i class="fas fa-pen icone-tabela "></i><a data-modal-target="#excluir"></td>
                <td><i class="fas fa-trash-alt icone-tabela "></i></a></td>
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
							<button>Excluir</button>
							<button data-close-button>Cancelar</button>
                    </article>
                </div>
            </div>
              <div id="overlay"></div>

			  <?php include_once "footer.php";
?>