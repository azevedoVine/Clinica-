<?php 
      include_once "entrar.php";
      include_once "topo.php";
      include_once "assets/classes/sobre/sobre.php";
      include_once "assets/classes/sobre/sobreDao.php";

      $sobreDao = new SobreDao; 

      $dados=$sobreDao->listaSobre();
?>
			
		<section>
    <div class="container">  
             			
		<div class="tabela">
			<table id="playlistTable">
            <caption class="titulo-tabela">Horários de Funcionamento</caption>
            <thead>
              <tr>
                <th>Dia</th>
                <th>Manhã</th>
                <th>Tarde</th>
                <th>Ação</th>

              </tr>
            </thead>

            <tbody>
              <?php foreach($dados as $sobre): ?>
              <tr>
                <td><?php echo $sobre['dia']; ?></td>
                <td><?php echo $sobre['manha']; ?></td>
                <td><?php echo $sobre['tarde']; ?></td>
                <td><a data-modal-target="#editar" class="edita-sobre" data-id="<?php echo $sobre['idSobre']?>"
                                                                      data-dia="<?php echo $sobre['dia']?>"
                                                                      data-manha="<?php echo $sobre['manha']?>"
                                                                      data-tarde="<?php echo $sobre['tarde']?>">
                                                                      <i class="fas fa-pen icone-tabela "></i></a></td>
              </tr>
              <?php endforeach?>
            </tbody>
          </table>
        </section>
        
        <div class="modal" id="editar">
					<div class="modal-header">
					  <div class="titulo negrito">Editar informações do Tratamento</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div>
							<div class="editar-modal">     
              <form action="sobreEdita.php" method="POST">                   
                  <input type="hidden"  id="id" name="id" >      
                  <label>Dia:</label><input type="text" name="dia" id="dia">
                  <label>Manha:</label><input type="text" name="manha" id="manha">      
                  <label>Tarde:</label><input type="text" name="tarde" id="tarde">      
                                <button data-close-button class="botao-editar">Editar</a>
                                <button data-close-button class="botao-editar">Cancelar</a>
							</div>
						</div>
					</div>
				</div>
          <div id="overlay"></div>

<?php include_once "footer.php"

?>

<script>
  $('.edita-sobre').on('click', function(){
    var id = $(this).data('id');
    var dia = $(this).data('dia');
    var manha = $(this).data('manha');
    var tarde = $(this).data('tarde');

    console.log(id,dia,manha,tarde);

    document.getElementById('id').value = id;
    document.getElementById('dia').value = dia;
    document.getElementById('manha').value = manha;
    document.getElementById('tarde').value = tarde;

    
  });

</script>