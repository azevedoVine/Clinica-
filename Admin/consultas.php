<?php
    include_once "entrar.php";
    include_once "topo.php";
    include_once "assets/classes/consulta/consulta.php";
    include_once "assets/classes/consulta/consultaDao.php";

    $consultasDao = new ConsultaDao; 

    $dados=$consultasDao->listaConsultas();

?>
			
		<section>
		<div class="container">	
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
                <th colspan="2">Ações</th>

              </tr>
            </thead>

            <tbody>
              <?php foreach($dados as $consultas):?>
              <tr>
                <td><?php echo $consultas['idConsulta'] ?></td>
                <td><?php echo $consultas['nome'] ?></td>
                <td><a href="dentistas.php":><?php echo $consultas['nomeDentista'] ?></a></td>
                <td><?php echo $consultas['data'] ?></td>
                <td><?php echo $consultas['horario'] ?></td>
                 <td><a data-modal-target="#detalhe" class="detalhe-consulta" data-id="<?php echo $consultas['idConsulta']?>"
                                                                             data-nome="<?php echo $consultas['nome']?>"
                                                                             data-dentista="<?php echo $consultas['nomeDentista']?>"
                                                                             data-dia="<?php echo $consultas['data']?>"
                                                                             data-hora="<?php echo $consultas['horario']?>"
                                                                             data-mensagem="<?php echo $consultas['mensagem']?>">                                                                          
                                                                             <i class="fas fa-eye icone-tabela "></i></a>
                 </td>
                 <td><a data-modal-target="#cancelar" class="cancelar-consulta" data-id="<?php echo $consultas['idConsulta']?>"
                                                                            data-dia="<?php echo $consultas['data']?>"
                                                                            data-hora="<?php echo $consultas['horario']?>">
                                                                            
                                                                            <i class="fas fa-times"></i></a>
                </td>                                                             
                  
              </tr>
              <?php endforeach;?>
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
              <p><span class="negrito">Paciente: </span><span id="nome-modal"></span></p>
              <p><span class="negrito">Horário: </span><span id="hora-modal"></span></p>
              <p><span class="negrito">Dia: </span><span id="dia-modal"></span></p>
              <p><span class="negrito">Dentista: </span><span id="dentista-modal"></span></p>
              <p><span class="negrito">Mensagem: </span><span id="mensagem-modal"></span></p>
              
                    </article>
                </div>
            </div>
    <div id="overlay"></div>

    <div class="modal" id="cancelar">
                <div class="modal-header">
                  <div class="titulo negrito">Consulta</div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <article>
                    <p>Tem certeza que deseja excluir este elemento?</p>
                    <p><span class="negrito">Dia: </span><span id="dia"></span></p>  
                    <p><span class="negrito">Horário: </span><span id="hora"></span></p>         
                    </article>
                    <form action="cancelaConsulta.php" method="POST">
                      <input type="hidden" id="id" name="id"/>
                      <input type="submit" value="Cancelar"/>
                    </form>
                </div>
            </div>
    <div id="overlay"></div>

<?php include_once "footer.php"; ?>
<script>
  $('.detalhe-consulta').on('click', function(){
    var nome = $(this).data('nome');
    var dentista = $(this).data('dentista');
    var dia = $(this).data('dia');
    var hora = $(this).data('hora');
    var mensagem = $(this).data('mensagem');

    if(mensagem == "" ){
      mensagem = "Nenhuma mensagem a ser mostrada";
    }

    console.log(dia);
  
    document.getElementById('nome-modal').innerHTML = nome;
    document.getElementById('dentista-modal').innerHTML = dentista;
    document.getElementById('dia-modal').innerHTML = dia;
    document.getElementById('hora-modal').innerHTML = hora;
    document.getElementById('mensagem-modal').innerHTML = mensagem;


    
  });

  $('.cancelar-consulta').on('click', function(){
    var id = $(this).data('id');
    var dia = $(this).data('dia');
    var hora = $(this).data('hora');

    console.log(dia);
  

    document.getElementById('id').value = id;
    document.getElementById('dia').innerHTML = dia;
    document.getElementById('hora').innerHTML = hora;

    
  });
</script>
