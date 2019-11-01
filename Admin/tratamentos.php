<?php include_once "topo.php";
      include_once "assets/classes/tratamentos/tratamento.php";
      include_once "assets/classes/tratamentos/tratamentoDao.php";

$tratamentoDao = new TratamentoDao();

$dados = $tratamentoDao->listaTratamentos();

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
                <th>Foto</th>
                <th>Data</th>
                <th colspan="2">Ações</th>

              </tr>
            </thead>

            <tbody>
              <?php foreach($dados as $tratamentos): ?>
                <tr>
                  <td><?php echo $tratamentos['idTratamentos'] ?></td>
                  <td><?php echo $tratamentos['titulo'] ?></td>
                  <td><?php echo substr($tratamentos['descricao'],0,50); echo"..."?></td>
                  <td><img src="assets/upload/<?php echo $tratamentos['src'] ?>" width="50px"></td>
                  <td><?php echo $tratamentos['publicacao'] ?></td>
                  <td><a data-modal-target="#editar" class='edita-tratamento' data-id="<?php echo $tratamentos['idTratamentos']?>"
                                                                      data-titulo="<?php echo $tratamentos['titulo']?>"
                                                                      data-descricao="<?php echo $tratamentos['descricao']?>"
                                                                      data-publicacao="<?php echo $tratamentos['publicacao']?>"
                                                                      data-foto="<?php echo $tratamentos['src']?>">
                                                                      <i class="fas fa-pen icone-tabela "></i></a></td>
                  <td><a data-modal-target="#excluir" class='exclui-tratamento' data-id="<?php echo $tratamentos['idTratamentos']?>"
                                                                               data-titulo="<?php echo $tratamentos['titulo']?>">
                                                                               <i class="fas fa-trash-alt icone-tabela "></i></a></td>
                </tr>
              <?php endforeach; ?>
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
                    <form action="tratamentoExclui.php" method="POST">
                      Tem certeza que deseja excluir este elemento:
                      <input type="hidden" id="id" name ="id" value="">
                      <input type="text" id="titulo" name ="titulo" value="">
                      <button data-close-button type="submit" class="botao-editar">Excluir</a>
                      <button data-close-button class="botao-editar-cancelar">Cancelar</a>
                    </form>
                    </article>
                </div>
            </div>
              <div id="overlay"></div>
    
    <div class="modal" id="editar">
        <div class="modal-header">
          <div class="titulo negrito">Editar informações da Atualização</div>
          <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
          <div>

            <div class="editar-modal">
            <form action="tratamentoEdita.php" method="POST">
              <input type="hidden" id="id-editar" name="id">
              <img id="foto-edita" width="100px">
              <label>Titulo:</label><input type="text" id="titulo-editar" name ="titulo" value="">
              <label>Descrição:</label><input type="text" id="descricao" name="descricao" value="">      
              <label>Data:</label><input type="text" id="publicacao" name="publicacao" value="">      
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
					  <div class="titulo negrito">Inserir Tratamento</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div class="inserir-modal">
						<form action="tratamentoInsere.php" enctype="multipart/form-data" method="POST">                   
                            <label>Titulo:</label><input type="text" name="titulo">
                            <label>Descrição:</label><textarea type="text" class="textarea-inserir" name="descricao"></textarea>
                            <label>Foto:</label><input type="file" name="foto">   
                            <label>Data:</label><input type="date" name="publicacao" placeholder="Ex.: dd/mm/aaaa" data-mask="00/00/0000" maxlength="10">        
                            <button class="botao-editar">Inserir</a>
                            <button data-close-button class="botao-editar-cancelar">Cancelar</a>
            </form>
						</div>
					</div>
				</div>
				  <div id="overlay"></div>

<?php include_once "footer.php";?>

<script>
  $('.edita-tratamento').on('click', function(){
    var id = $(this).data('id');
    var titulo = $(this).data('titulo');
    var descricao = $(this).data('descricao');
    var publicacao = $(this).data('publicacao');
    var foto = $(this).data('foto');

    console.log(id);

    document.getElementById('id-editar').value = id;
    document.getElementById('titulo-editar').value = titulo;
    document.getElementById('descricao').value = descricao;
    document.getElementById('publicacao').value = publicacao;
    document.getElementById('foto-edita').src = "assets/upload/"+foto;

    
  });

  $('.exclui-tratamento').on('click', function(){
    var id = $(this).data('id');
    var titulo = $(this).data('titulo');
    var texto = $(this).data('texto');
    var descricao = $(this).data('descricao');
    var publicacao = $(this).data('publicacao');

    console.log(id);

    document.getElementById('id').value = id;
    document.getElementById('titulo').value = titulo;

    
  });
</script>