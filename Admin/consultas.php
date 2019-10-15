<?php include_once "topo.php";
    include_once "assets/classes/consulta/consulta.php";
    include_once "assets/classes/consulta/consultaDao.php";

    $consultasDao = new ConsultaDao; 

    $dados=$consultasDao->listaConsultas();

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
                <th>Paciente</th>
                <th>Dentista</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Ações</th>

              </tr>
            </thead>

            <tbody>
              <?php foreach($dados as $consultas):?>
              <tr>
                <td><?php echo $consultas['idConsulta'] ?></td>
                <td><?php echo $consultas['nome'] ?></td>
                <td><?php echo $consultas['nomeDentista'] ?></td>
                <td><?php echo $consultas['data'] ?></td>
                <td><?php echo $consultas['horario'] ?></td>
                 <td><!--<a data-modal-target="#detalhe" class="detalhe-consulta" data-id="<?php echo $consultas['idConsulta']?>"
                                                                             data-nome="<?php echo $consultas['nome']?>"
                                                                             data-dentista="<?php echo $consultas['nomeDentista']?>"
                                                                             data-dia="<?php echo $consultas['data']?>"
                                                                             data-hora="<?php echo $consultas['horario']?>"> -->
                                                                             
                                                                             <i class="fas fa-eye icone-tabela "></i></a></td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
			
			</div>
		</div>
		</section>

		<!-- <div class="modal" id="detalhe">
                <div class="modal-header">
                  <div class="titulo negrito">Consulta</div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <article>
							<p><span class="negrito">Paciete: </span><input type="text" id="id" name="id"></p>
							<p><span class="negrito">Horário: </span><input type="text" id="nome" name="nome"></p>
							<p><span class="negrito">Dia: </span>01/12/1123</p>
							<p><span class="negrito">Dentista: </span>Jalma</p>
							
                    </article>
                </div>
            </div>
              <div id="overlay"></div> -->

<?php include_once "footer.php"; ?>
<!-- <script>
  $('.edita-atualizacao').on('click', function(){
    var id = $(this).data('id');
    var nome = $(this).data('nome');
    var dentista = $(this).data('dentista');
    var dia = $(this).data('dia');
    var hora = $(this).data('hora');

  

    document.getElementById('id').value = id;
    document.getElementById('nome').value = nome;
    document.getElementById('dentista').value = dentista;
    document.getElementById('descricao').value = dia;
    document.getElementById('publicacao').value = horario;

    
  });
</script> -->
