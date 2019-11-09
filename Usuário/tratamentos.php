<?php
            include_once 'topo.php';
            include_once 'assets\classes\tratamentos\tratamentoDao.php';
			include_once 'assets\classes\atualizacoes\atualizacaoDao.php';

        $tratamentoDao= new TratamentoDao();

        $dados = $tratamentoDao->listaTratamentos();

        $atualizacaoDao = new AtualizacaoDao();

        $dados1=$atualizacaoDao->lista3Atualizacoes();
		?>
<html>

    
    <section>
        <div class="container">
            <p class="titulo-tratamento"> Tratamentos </p>
        <div id="conteudo-tratamentos">
           <div id="tratamentos"> 
            <?php foreach($dados as $tratamento):?>
                <div class="tratamento">
                <a data-modal-target="#tratamento-individual" class="saiba-botao saiba-tratamento" data-src="<?php echo $tratamento['src']?>"
                                                                                  data-descricao="<?php echo $tratamento['descricao']?>"
                                                                                  data-titulo="<?php echo $tratamento['titulo']?>">
                    <img src="../Admin/assets/upload/<?php echo $tratamento['src'] ?>" class="foto-propaganda">
                    <p class="nome-tratamento"><?php echo $tratamento['titulo'] ?></p>
                    <div class="saiba-mais"><p class="botao-saiba">SAIBA MAIS</p><i id="icone-saiba-mais" class="fas fa-plus icone-mais"></i></div></a>
                </div>
            <?php endforeach;?>
            <!--
            <div class="tratamento">
            <a data-modal-target="#tratamento-individual" class="saiba-botao">
                <img src="assets/img/aparelho-ortodontico.jpg" class="foto-propaganda">
                <p class="nome-tratamento">Clareamento</p>
                <div class="saiba-mais"><p class="botao-saiba">SAIBA MAIS</p><i id="icone-saiba-mais" class="fas fa-plus icone-mais"></i></div></a>
            </div>
            <div class="tratamento">
            <a data-modal-target="#tratamento-individual" class="saiba-botao">
                <img src="assets/img/Implantes.jpg" class="foto-propaganda">
                <p class="nome-tratamento">Implantes</p>
                <div class="saiba-mais"> <p class="botao-saiba">SAIBA MAIS</p><i id="icone-saiba-mais" class="fas fa-plus icone-mais"></i></div></a>
            </div>
            </div>
            <div id="tratamentos"> 
                <div class="tratamento">
                <a data-modal-target="#tratamento-individual" class="saiba-botao">
                    <img src="assets/img/clareamento.jpg" class="foto-propaganda">
                    <p class="nome-tratamento">Clareamento</p>
                   <div class="saiba-mais"><p class="botao-saiba">SAIBA MAIS</p><i id="icone-saiba-mais" class="fas fa-plus icone-mais"></i></div></a>
                </div>
                <div class="tratamento">
                <a data-modal-target="#tratamento-individual" class="saiba-botao">
                    <img src="assets/img/aparelho-ortodontico.jpg" class="foto-propaganda">
                    <p class="nome-tratamento">Clareamento</p>
                    <div class="saiba-mais"><p class="botao-saiba">SAIBA MAIS</p><i id="icone-saiba-mais" class="fas fa-plus icone-mais"></i></div></a>
                </div>
                <div class="tratamento">
                <a data-modal-target="#tratamento-individual" class="saiba-botao">
                    <img src="assets/img/clinica-geral.jpg" class="foto-propaganda">
                    <p class="nome-tratamento">Clinica Geral</p>
                    <div class="saiba-mais"><p class="botao-saiba">SAIBA MAIS</p><i id="icone-saiba-mais" class="fas fa-plus icone-mais"></i></div></a>
                </div> -->
                </div>
        </div>

        <div class="propaganda-tratamento">
            <p class="titulo negrito">Atualizações</p>
            <?php foreach($dados1 as $atualizacoes):?>
            <div>
                <p class="sub-titulo negrito"><?php echo $atualizacoes['titulo']; ?></p>
                <p><?php echo $atualizacoes['texto'];?></p>            
            </div>
            <?php endforeach;?>
            <a href="atualizacoes.php"><button class='vejamais tratamento-botao'>Veja mais</button></a>
        </div>
        </div>
    </section>


        <div class="modal modal-maior" id="tratamento-individual">
                <div class="modal-header">
                  <div class="titulo negrito"><span id="titulo-modal"></span></div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                        <img id="foto-modal" name="modal-foto" class="foto-propaganda modal-foto">
                    <article>
                            <p id="descricao-modal"></p>                  
                    </article>
                </div>
            </div>
              <div id="overlay"></div>

<?php
	include_once 'footer.php';
	?> 

<script>
  $('.saiba-tratamento').on('click', function(){
    var foto = $(this).data('src');
    var titulo = $(this).data('titulo');
    var descricao = $(this).data('descricao');

    console.log(foto);
	
    document.getElementById('titulo-modal').innerHTML = titulo;
    document.getElementById('descricao-modal').innerHTML = descricao;
    document.getElementById('foto-modal').src = "../Admin/assets/upload/"+foto;

    
  });

</script>