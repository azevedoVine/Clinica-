	<?php
			include_once 'topo.php';
		?>
<html>
		<section>
				<div class="anuncio">
					<div class="slider">
						<div><img src="assets/img/anuncio-home.png" width="1243.61px"></div>
						<div><img src="assets/img/anuncio-home.png" width="1243.61px" ></div>
					</div>
				</div>
		</section>
		<section>
			<div class="container">
			<div class="fundo">
				<p class="titulo negrito">Profissionais em Destaque </p>
				<div class="dentistas">
					<div class="dentista">
					<a data-modal-target="#gumercinda">
						<img src="assets/img/dentista-1.jpg" class="foto-perfil">
						<p class="nome-dentista">Gumercinda <i class="fas fa-info-circle detalhe"></i> </a></p>
					</div>
					
					<div class="dentista">
					<a data-modal-target="#jalma">
						<img src="assets/img/dentista-2.jpg" class="foto-perfil">
						<p class="nome-dentista">Jalma <i class="fas fa-info-circle detalhe"></i></a></p>
					</div>
					
					<div class="dentista">
					<a data-modal-target="#joeferson">
						<img src="assets/img/dentista-3.jpg" class="foto-perfil">
					<p class="nome-dentista">Joeferson <i class="fas fa-info-circle detalhe"></i></a></p>
					</div>
					
				</div>
				<a href="dentistas.html"><button class='vejamais'>Mais Profissionais</button></a>
			</div>

			<div class="atualizacoes-atalho">
				<p class="titulo negrito">Últimas Atualizações</p>
				<div>
				<p class="sub-titulo negrito">Noticia tal</p>
				<p>No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.</p>
				</div>
				<a href="atualizacoes.html"><button class='vejamais atualizacao-botao'>Mais Notícias</button></a>
			</div>

		</section>


<!-- Detalhe dos dentistas -->
		<div class="modal" id="gumercinda">
			<div class="modal-header">
			  <div class="titulo negrito">Profissional em destaque</div>
			  <button data-close-button class="close-button">&times;</button>
			</div>
			<div class="modal-body">
				<div class="dentistas">
					<div class="dentista">
						<img src="assets/img/dentista-1.jpg" height="200" class="foto-dentista">
					</div>
					<div class="informacao-dentista">
						<p><span class="negrito">Nome: </span>Gumercinda da Cú da Luz</p>
						<p><span class="negrito">CRO: </span>54673/RS</p>
						<p><span class="negrito">Especialização: </span>Periodontista</p>
					</div>
				</div>
			</div>
		  </div>
		  <div id="overlay"></div>

		  <div class="modal" id="jalma">
				<div class="modal-header">
				  <div class="titulo negrito">Profissional em destaque</div>
				  <button data-close-button class="close-button">&times;</button>
				</div>
				<div class="modal-body">
					<div class="dentistas">
						<div class="dentista">
							<img src="assets/img/dentista-2.jpg" height="200" class="foto-dentista">
						</div>
						<div class="informacao-dentista">
							<p><span class="negrito">Nome: </span>Jalma da Boa Morte</p>
							<p><span class="negrito">CRO: </span>654789/RS</p>
							<p><span class="negrito">Especialização: </span>Ortodontia</p>
						</div>
					</div>
				</div>
			  </div>
			  <div id="overlay"></div>
		
			  <div class="modal" id="joeferson">
					<div class="modal-header">
					  <div class="titulo negrito">Profissional em destaque</div>
					  <button data-close-button class="close-button">&times;</button>
					</div>
					<div class="modal-body">
						<div class="dentistas">
							<div class="dentista">
								<img src="assets/img/dentista-3.jpg" height="200" class="foto-dentista">
							</div>
							<div class="informacao-dentista">
								<p><span class="negrito">Nome: </span> Joeferson Catarrinho</p>
								<p><span class="negrito">CRO: </span>98765/RS</p>
								<p><span class="negrito">Especialização: </span>Implantodontia</p>
							</div>
						</div>
					</div>
				</div>
				  <div id="overlay"></div>
<?php
	include_once 'footer.php';
	?>  

