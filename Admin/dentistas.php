<?php include_once 'topo.php';
      include_once 'assets/classes/dentista/dentista.php';
      include_once 'assets/classes/dentista/dentistaDao.php';

      $dentistasDao = new DentistaDao; 

      $dados=$dentistasDao->listaDentistas();
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
            <caption class="titulo-tabela">Consultas</caption>
            <thead>
              <tr>
                <th>Id</th>
                <th>CRO</th>
                <th>Nome</th>
                <th>Foto de Perfil</th>
                <th colspan="2">Ações</th>

              </tr>
            </thead>

            <tbody>
              <?php foreach($dados as $dentistas):?>
              <tr>
                <td><?php echo $dentistas['idDentista'] ?></td>
                <td><?php echo $dentistas['CRO'] ?></td>
                <td><?php echo $dentistas['nomeDentista'] ?></td>
                <td><?php echo $dentistas['perfilDentista'] ?></td>
                 <td><a data-modal-target="#editar" class="edita-dentista" data-id="<?php echo $dentistas['idDentista']?>"
                                                                             data-cro="<?php echo $dentistas['CRO']?>"
                                                                             data-nome="<?php echo $dentistas['nomeDentista']?>"
                                                                             data-foto="<?php echo $dentistas['perfilDentista']?>">                                                                             
                                                                             <i class="fas fa-pen icone-tabela "></i></a></td>
                <td><a data-modal-target="#excluir" class="exclui-dentista" class="edita-dentista" data-id="<?php echo $dentistas['idDentista']?>"
                                                                                                   data-nome="<?php echo $dentistas['nomeDentista']?>">
                                                                                                   <i class="fas fa-trash-alt icone-tabela "></i></a>
                </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
			
			</div>
		</div>
		</section>


    <div class="modal" id="editar">
                <div class="modal-header">
                    <div class="titulo negrito">Editar informações do Dentista</div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <div>

                        <div class="editar-modal">
            <form action="dentistaEdita.php" method="POST">
            <input type="hidden" id="id-editar" name="id">
            <label>CRO:</label><input type="text" id="cro" name ="cro" value="">    
            <label>Nome:</label><input type="text"  id="nome-editar" name ="texto" value="">      
            <label>Foto:</label><input type="text" id="foto" name="descricao" value="">     
                <button type="submit" data-close-button class="botao-editar">Editar</button>
                <button data-close-button class="botao-editar-cancelar">Cancelar</button>
            </form>
                        </div>
                    </div>
                </div>
            </div>
        <div id="overlay"></div>

        <div class="modal" id="excluir">
                <div class="modal-header">
                    <div class="titulo negrito">Excluir Dentista</div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir este elemento:
                    <form action="dentistaExclui.php" method="POST">
                    <input type="hidden" id="id" name="id">  
                    <label>Nome:</label><input type="text"  id="nome" name ="texto" value="">      
                        <button type="submit" data-close-button class="botao-editar">Excluir</button>
                        <button data-close-button class="botao-editar-cancelar">Cancelar</button>
                    </form>
                </div>
            </div>
        <div id="overlay"></div>


<?php include_once 'footer.php';
?>

<script>
  $('.edita-dentista').on('click', function(){
    var id = $(this).data('id');
    var cro = $(this).data('cro');
    var nome = $(this).data('nome');
    var foto = $(this).data('foto');

    console.log(cro)

    document.getElementById('id-editar').value = id;
    document.getElementById('cro').value = cro;
    document.getElementById('nome-editar').value = nome;
    document.getElementById('foto').value = foto;

    
  });

  $('.exclui-dentista').on('click', function(){
    var id = $(this).data('id');
    var nome = $(this).data('nome');

    document.getElementById('id').value = id;
    document.getElementById('nome').value = nome;

    
  });
</script>