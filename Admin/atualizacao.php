<?php include_once "topo.php";
?>
			
		<section>
		<div class="container">
			<div class="menu-lateral">
				<p>Ordenar por:</p>
					<select name="filtros">
						<option value="padrao">Padrão</option>
						<option value="descricao">Descrição</option>
						<option value="data">Data</option>
						<option value="titulo">Titulo</option>                                    
					</select>		
			</div>		
			<div class="tabela">
					<table>
							<tr class="titulo-tabela">
							<th colspan="6">Atualizações</th>
						  </tr>
						  <tr class="tr1">
							<th>Id</th>
							<th>Titulo</th>
							<th>Descrição</th>
							<th>Data de Publicação</th>
							<th>Foto</th>
							<th>Ações</th>
						  </tr>
						  <tr>
							<td>1</td>
							<td>Noticia Tal</td>
							<td>É legal </td>
							<td>12/06/2019</td>
							<td><img src="assets/img/uj.png"></td>
							<td> <i class="fas fa-pen icone-tabela "></i><a data-modal-target="#excluir"><i class="fas fa-trash-alt icone-tabela "></i></a></td>
						  </tr>
						  <tr>
								<td>2</td>
								<td>Noticia Tal</td>
								<td>É legal</td>
								<td>12/06/2019</td>
								<td><img src="assets/img/uj.png"></td>
								<td> <i class="fas fa-pen icone-tabela "></i><a data-modal-target="#excluir"><i class="fas fa-trash-alt icone-tabela "></i></a></td>
						  </tr>
						  <tr>
								<td>3</td>
								<td>Noticia Tal</td>
								<td>Não é legal</td>
								<td>12/06/2019</td>
								<td><i class="fas fa-image icone-tabela "></i></td>
								<td> <i class="fas fa-pen icone-tabela "></i><a data-modal-target="#excluir"><i class="fas fa-trash-alt icone-tabela "></i></a></td>
						  </tr>
						 
						  
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
							<p>Tem certeza que deseja excluir "Noticia Tal"?</p>
							<button>Excluir</button>
							<button data-close-button>Cancelar</button>
                    </article>
                </div>
            </div>
              <div id="overlay"></div>

<?php include_once "footer.php"

?>