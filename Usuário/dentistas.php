<?php
            include_once 'topo.php';
            include_once 'assets\classes\dentista\dentistaDao.php';
            include_once 'assets\classes\tratamentos\tratamentoDao.php';

        $dentistaDao = new DentistaDao();

        $dados=$dentistaDao->listaDentistas();
        
        $tratamentoDao= new TratamentoDao();

        $dados2 = $tratamentoDao->lista2Tratamentos();
?>

<div class="container">
<p class="titulo-tratamento"> Profissionais </p>
                    <?php foreach ($dados as $dentista ): ?>	
						<div class="dentista dentistas-lista">
						<a data-modal-target="#dentista" class="detalhe-dentista" data-cro="<?php echo $dentista['CRO']?>"
                                                                             data-nome="<?php echo $dentista['nomeDentista']?>"
                                                                             data-esp="<?php echo $dentista['especializacao'] ?>"
                                                                             data-foto="<?php echo $dentista['perfilDentista']?>">
							<img src="../Admin/assets/upload/<?php echo $dentista["perfilDentista"]?>" class="perfil-destaque">
							<p class="nome-dentista"><?php echo $dentista["nomeDentista"]?> <i class="fas fa-info-circle detalhe"></i> </a></p>
						</div>
                    <?php endforeach?>

                    <div class="propaganda-tratamento tratamento-dentistas-lista">
                <p class="titulo negrito">Tratamentos</p>
                <?php foreach($dados2 as $tratamento):?>
                    <div class="propaganda-individual">
                        <p class="sub-titulo negrito"><?php echo $tratamento["titulo"] ?></p>
                        <p><?php echo $tratamento["descricao"] ?></p>
                        <img src="assets/img/<?php echo $tratamento["src"] ?>" class="foto-propaganda">
                    </div>
                <?php endforeach;?>
                <a href="tratamentos.php"><button class='vejamais tratamento-botao'>Veja mais</button></a>
            </div>
</div>
                    
                    <div class="modal" id="dentista">
                <div class="modal-header">
                    <div class="titulo negrito">Profissional em destaque</div>
                    <button data-close-button class="close-button">&times;</button>
				</div>
				<div class="modal-body">
					<div class="dentistas">
						<div class="dentista">
							<img id="foto" name="foto" height="200" class="foto-dentista">
						</div>
						<div class="informacao-dentista">
							<p><span class="negrito">Nome: </span><span id="nome-dentista"></span></p>   
							<p><span class="negrito">CRO: </span><span id="cro-dentista"></span></p>       
							<p><span class="negrito">Especialização: </span><span id="esp-dentista"></span></p>   
						</div>
					</div>
				</div>
            </div>
        <div id="overlay"></div>
<?php
	include_once 'footer.php';
    ?>  
    
    <script>
  $('.detalhe-dentista').on('click', function(){
    var cro = $(this).data('cro');
    var nome = $(this).data('nome');
    var esp = $(this).data('esp');
	var foto = $(this).data('foto');
	
    document.getElementById('nome-dentista').innerHTML = nome;
    document.getElementById('cro-dentista').innerHTML = cro;
    document.getElementById('esp-dentista').innerHTML = esp;
    document.getElementById('foto').src = "../Admin/assets/upload/"+foto;

    
  });

</script>