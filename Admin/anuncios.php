<?php
  include_once "entrar.php";
  include_once "topo.php";
  include_once "assets/classes/anuncios/anuncio.php";
  include_once "assets/classes/anuncios/anuncioDao.php";

  $anuncioDao = new AnuncioDao();

  $dados = $anuncioDao->listaAnuncios();

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
          <table id="playlistTable">
          <a data-modal-target="#inserir" ><button class="botao-nova">Novo Anúncio</button></a>
            <caption class="titulo-tabela">Anúncios</caption>
            <thead>
              <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Imagem</th>
                <th colspan="2">Ações</th>

              </tr>
            </thead>

            <tbody>
            <?php foreach($dados as $anuncios): ?>
              <tr>
                <td><?php echo $anuncios['idAnuncio']?></td>
                <td><?php echo substr($anuncios['nome'],0,50); echo"..."?></td>
                <td><img src="assets/upload/<?php echo $anuncios['src']?>" width='50'></td>
                <td><a data-modal-target="#editar" class="edita-anuncio" data-id="<?php echo $anuncios['idAnuncio']?>"
                                                                      data-nome="<?php echo $anuncios['nome']?>"
                                                                      data-foto="<?php echo $anuncios['src']?>">
                                                                      <i class="fas fa-pen icone-tabela "></i></a></td>
                <td><a data-modal-target="#excluir" class="exclui-anuncio" data-nome="<?php echo $anuncios['nome']?>"
                                                                               data-id="<?php echo $anuncios['idAnuncio']?>">
                                                                              <i class="fas fa-trash-alt icone-tabela "></i></a></td>
              </tr>
            <?php endforeach;?>
            </tbody>
          </table>
			
			</div>

		</div>
		</section>

		<div class="modal" id="excluir">
                <div class="modal-header">
                  <div class="titulo negrito">Excluir Anúncio</div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <article>
                    <form action="anuncioExclui.php" method="POST" accept-charset="UTF-8">
                      Tem certeza que deseja excluir este elemento:
                      <input type="hidden" id="id" name ="id" value="">
                      <input type="text" id="nome" name ="nome" value="">
                      <button data-close-button type="submit" class="botao-editar">Excluir</a>
                      <button data-close-button class="botao-editar-cancelar">Cancelar</a>
                    </form>
                    </article>
                </div>
            </div>
              <div id="overlay"></div>

    <div class="modal" id="editar">
					<div class="modal-header">
					  <div class="titulo negrito">Editar informações do Anuncio</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div>

							<div class="editar-modal">
              <form action="anuncioEdita.php" method="POST" accept-charset="UTF-8">
                <input type="hidden" id="id-editar" name="id">
                <img id="foto-edita" width="100px">
                <p><label>Titulo:</label></p><input type="text" id="nome-editar" name ="nome" value="">
                    <button type="submit" data-close-button class="botao-editar">Editar</button>
                    <button data-close-button class="botao-editar-cancelar">Cancelar</button>
              </form>
							</div>
						</div>
					</div>
				</div>
          <div id="overlay"></div>
  
    <div class="modal" id="inserir">
					<div class="modal-header">
					  <div class="titulo negrito">Inserir Anúncio</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div class="inserir-modal">
						<form action="anuncioInsere.php" enctype="multipart/form-data" method="POST" accept-charset="UTF-8">                   
              <label>Titulo:</label><input required="true" type="text" name="nome">     
              <label>Foto:</label><input type="file" name="foto"> 
              <button type="submit" class="botao-editar">Inserir</button>
              <button data-close-button class="botao-editar-cancelar">Cancelar</button>
            </form>
						</div>
					</div>
				</div>
				  <div id="overlay"></div>

        
          
<?php 
  include_once "footer.php";
?>

<script>
  $('.edita-anuncio').on('click', function(){
    var id = $(this).data('id');
    var nome = $(this).data('nome');
    var foto = $(this).data('foto');
    
    document.getElementById('id-editar').value = id;
    document.getElementById('nome-editar').value = nome;
    document.getElementById('foto-edita').src = "assets/upload/"+foto;

    
  });

  $('.exclui-anuncio').on('click', function(){
    
    var id = $(this).data('id');
    var nome = $(this).data('nome');

    document.getElementById('id').value = id;
    document.getElementById('nome').value = nome;
    
  });
</script>


    
