<?php
            include_once 'topo.php';
            include_once 'assets\classes\tratamentos\tratamentoDao.php';
            include_once 'assets\classes\dentista\dentistaDao.php';
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
                  <div class="titulo negrito">Tratamento</div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                        <img src="assets/img/aparelho-ortodontico.jpg" class="foto-propaganda modal-foto">
                    <article>
                            <p>Ai você fala o seguinte: "- Mas vocês acabaram isso?" Vou te falar: -"Não, está em andamento!" Tem obras que "vai" durar pra depois de 2010. Agora, por isso, nós já não desenhamos, não começamos a fazer projeto do que nós "podêmo fazê"? 11, 12, 13, 14... Por que é que não?</p>
                            
                            <p>Se hoje é o dia das crianças... Ontem eu disse: o dia da criança é o dia da mãe, dos pais, das professoras, mas também é o dia dos animais, sempre que você olha uma criança, há sempre uma figura oculta, que é um cachorro atrás. O que é algo muito importante!</p>
                            
                            <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.</p>
                            
                            <p>No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.</p>
                                                    
                    </article>
                </div>
            </div>
              <div id="overlay"></div>

<?php
	include_once 'footer.php';
	?> 

<script>
  $('.saiba-tratamento').on('click', function(){
    var src = $(this).data('src');
    var titulo = $(this).data('titulo');
    var descricao = $(this).data('descricao');

    console.log(descricao)
	
    document.getElementById('nome-dentista').innerHTML = nome;
    document.getElementById('cro-dentista').innerHTML = cro;
    document.getElementById('foto').src = "../Admin/assets/upload/"+foto;

    
  });

</script>