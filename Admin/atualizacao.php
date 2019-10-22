<?php include_once "topo.php";
      include_once "assets/classes/atualizacoes/atualizacao.php";
      include_once "assets/classes/atualizacoes/atualizacaoDao.php";

  $atualizacaoDao = new AtualizacaoDao();

  $dados = $atualizacaoDao->listaAtualizacoes();

  //$dados1 = $atualizacaoDao->listaImgAtualizacoes();

  // foreach($dados1 as $src){
  //   $dados['src']=$src['src'];
  // }

  // echo $dados['src'];

  // die();
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
          <a data-modal-target="#inserir" ><button class="botao-nova">Nova Atualização</button></a>
            <caption class="titulo-tabela">Atualizações</caption>
            <thead>
              <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Texto</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Imagem</th>
                <th colspan="2">Ações</th>

              </tr>
            </thead>

            <tbody>
            <?php foreach($dados as $atualizacoes): ?>
              <tr>
                <td><?php echo $atualizacoes['idAtualizacao']?></td>
                <td><?php echo $atualizacoes['titulo']?></td>
                <td><?php echo substr($atualizacoes['texto'],0,50); echo"..."?></td>
                <td><?php echo $atualizacoes['descricao']?></td>
                <td><?php echo $atualizacoes['publicacao']?></td>
                <td><img src="assets/upload/<?php echo $atualizacoes['src']?>"></td>
                <td><a data-modal-target="#editar" class="edita-atualizacao" data-id="<?php echo $atualizacoes['idAtualizacao']?>"
                                                                      data-titulo="<?php echo $atualizacoes['titulo']?>"
                                                                      data-texto="<?php echo $atualizacoes['texto']?>"
                                                                      data-descricao="<?php echo $atualizacoes['descricao']?>"
                                                                      data-publicacao="<?php echo $atualizacoes['publicacao']?>">
                                                                      <i class="fas fa-pen icone-tabela "></i></a></td>
                <td><a data-modal-target="#excluir" class="exclui-atualizacao" data-titulo="<?php echo $atualizacoes['titulo']?>"
                                                                               data-id="<?php echo $atualizacoes['idAtualizacao']?>">
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
                  <div class="titulo negrito">Excluir</div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <article>
                    <form action="atualizacaoExclui.php" method="POST">
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
              <form action="atualizacaoEdita.php" method="POST">
                <input type="hidden" id="id-editar" name="id">
                <label>Titulo:</label><input type="text" id="titulo-editar" name ="titulo" value="">    
                <label>Texto:</label><input type="text"  id="texto" name ="texto" value="">      
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
					  <div class="titulo negrito">Inserir Atualização</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div class="inserir-modal">
						<form action="atualizacaoInsere.php" enctype="multipart/form-data" method="POST">                   
              <label>Titulo:</label><input required="true" type="text"  name="titulo" >      
              <label>Texto:</label><textarea type="text" name="texto" class="textarea-inserir"></textarea> 
              <label>Descrição:</label><input type="text" name="descricao">      
              <label>Foto:</label><input type="file" name="foto">      
              <label>Data:</label><input type="date" name="publicacao" placeholder="Ex.: dd/mm/aaaa" data-mask="00/00/0000" maxlength="10">   
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
  $('.edita-atualizacao').on('click', function(){
    var id = $(this).data('id');
    var titulo = $(this).data('titulo');
    var texto = $(this).data('texto');
    var descricao = $(this).data('descricao');
    var publicacao = $(this).data('publicacao');

    console.log(texto);

    document.getElementById('id-editar').value = id;
    document.getElementById('titulo-editar').value = titulo;
    document.getElementById('texto').value = texto;
    document.getElementById('descricao').value = descricao;
    document.getElementById('publicacao').value = publicacao;

    
  });

  $('.exclui-atualizacao').on('click', function(){
    
    var id = $(this).data('id');
    var titulo = $(this).data('titulo');

    document.getElementById('id').value = id;
    document.getElementById('titulo').value = titulo;
    
  });
</script>



    
