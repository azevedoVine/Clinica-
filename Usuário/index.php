	<?php
			include_once 'topo.php';
			include_once 'assets\classes\dentista\dentistaDao.php';
			include_once 'assets\classes\anuncios\anuncioDao.php';
			include_once 'assets\classes\atualizacoes\atualizacaoDao.php';
			

		$dentistaDao = new DentistaDao();

		$dados=$dentistaDao->lista3Dentistas();

		$atualizacaoDao = new AtualizacaoDao();

		$dados1=$atualizacaoDao->listaUltimaAtualizacoes();

		$anuncioDao = new AnuncioDao();

		$dados2=$anuncioDao->listaAnuncios();

		?>
<html>
		<section>
				<div class="anuncio">
					<div class="slider">
					<?php foreach ($dados2 as $anuncio ): ?>
						<div><img src="../Admin/assets/upload/<?php echo $anuncio["src"]?>" width="1243.61px"></div>
					<?php endforeach?>
					</div>
				</div>
		</section>
		<section>
			<div class="container">
			<div class="fundo">
				<p class="titulo negrito">Profissionais em Destaque </p>
				<div class="dentistas">
					<?php foreach ($dados as $dentista ): ?>	
						<div class="dentista">
						<a data-modal-target="#dentista" class="detalhe-dentista" data-cro="<?php echo $dentista['CRO']?>"
                                                                             data-nome="<?php echo $dentista['nomeDentista']?>"
                                                                             data-esp="<?php echo $dentista['especializacao'] ?>"
                                                                             data-foto="<?php echo $dentista['perfilDentista']?>">
							<img src="../Admin/assets/upload/<?php echo $dentista["perfilDentista"]?>" class="perfil-destaque">
							<p class="nome-dentista"><?php echo $dentista["nomeDentista"]?> <i class="fas fa-info-circle detalhe"></i> </a></p>
						</div>
					<?php endforeach?>
				</div>
				<a href="dentistas.php"><button class='vejamais'>Mais Profissionais</button></a>
			</div>

			<div class="atualizacoes-atalho">
				<p class="titulo negrito">Últimas Atualizações</p>
				<div>
				<?php foreach($dados1 as $atualizacao):?>
				<p class="sub-titulo negrito"><?php echo $atualizacao["titulo"];?></p>
				<p><?php echo $atualizacao["texto"];?></p>
				</div>
				<?php endforeach?>
				<a href="atualizacoes.php"><button class='vejamais atualizacao-botao'>Mais Notícias</button></a>
			</div>

		</section>


<!-- Detalhe dos dentistas -->
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