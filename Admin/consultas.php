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

			<div class="tabela">
			<table id="playlistTable">
            <caption class="titulo-tabela">Consultas</caption>
            <thead>
              <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Ações</th>

              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>Hide You</td>
                <td>Kosheen</td>
                <td>01/09/1990</td>
                <td> <i class="fas fa-eye icone-tabela "></i><a data-modal-target="#detalhe"></td>
              </tr>

              <tr>
                <td>2</td>
                <td>.38.45</td>
                <td>Thievery Corporation</td>
                <td>01/09/1990</td>
                <td> <i class="fas fa-eye icone-tabela "></i><a data-modal-target="#detalhe"></td>
              </tr>

              <tr>
                <td>3</td>
                <td>Fix You</td>
                <td>Coldplay</td>
                <td>01/09/1990</td>
                <td> <i class="fas fa-eye icone-tabela "></i><a data-modal-target="#detalhe"></td>
              </tr>

              <tr>
                <td>4</td>
                <td>Maps</td>
                <td>Yeah Yeah Yeahs</td>
                <td>01/09/1990</td>
                <td> <i class="fas fa-eye icone-tabela "></i><a data-modal-target="#detalhe"></td>
              </tr>

              <tr>
                <td>5</td>
                <td>Ask me how I am</td>
                <td>Snow Patrol</td>
                <td>01/09/1990</td>
                <td> <i class="fas fa-eye icone-tabela "></i><a data-modal-target="#detalhe"></td>
              </tr>

              <tr>
                <td>6</td>
                <td>PMT</td>
                <td>Deeper Water</td>
                <td>01/09/1990</td>
                <td> <i class="fas fa-eye icone-tabela "></i><a data-modal-target="#detalhe"></td>
              </tr>

              <tr>
                <td>7</td>
                <td>Four Kicks</td>
                <td>Kings of Leon</td>
                <td>01/09/2001</td>
                <td> <i class="fas fa-eye icone-tabela "></i><a data-modal-target="#detalhe"></td>
              </tr>

              <tr>
                <td>8</td>
                <td>Gravity</td>
                <td>Embrace</td>
                <td>01/09/1998</td>
                <td> <i class="fas fa-eye icone-tabela "></i><a data-modal-target="#detalhe"></td>
              </tr>

              <tr>
                <td>9</td>
                <td>Lyla</td>
                <td>Oasis</td>
                <td>01/09/1990</td>
                <td> <i class="fas fa-eye icone-tabela "></i><a data-modal-target="#detalhe"></td>
              </tr>

              <tr>
                <td>10</td>
                <td>All For You, Sophia</td>
                <td>Franz Ferdinand</td>
                <td>01/09/1990</td>
                <td> <i class="fas fa-eye icone-tabela "></i><a data-modal-target="#detalhe"></td>
              </tr>

            </tbody>
          </table>
			
			</div>
		</div>
		</section>

		<div class="modal" id="detalhe">
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
