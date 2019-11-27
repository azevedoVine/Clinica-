<?php
            include_once 'topo.php';
            include_once 'assets\classes\tratamentos\tratamentoDao.php';
			include_once 'assets\classes\atualizacoes\atualizacaoDao.php';

        $tratamentoDao= new TratamentoDao();

        $dados = $tratamentoDao->lista2Tratamentos();

        $atualizacaoDao = new AtualizacaoDao();

        $dados1=$atualizacaoDao->listaAtualizacoes();
		?>
<html>

    <section>
        <div class="container">
            <p class="titulo-tratamento"> Atualizações </p>
            <div class="atualizacao">
            <?php foreach($dados1 as $atualizacao):?>
                <div class="atualizacao-individual">
                    <p class="titulo negrito"><?php echo $atualizacao["titulo"];?></p>
                    <p><?php echo $atualizacao["descricao"];?></p>
                    <a data-modal-target="#detalhe-atualizacao" class='atualizacao-detalhe' data-titulo="<?php echo $atualizacao['titulo']?>"
                                                                      data-texto="<?php echo $atualizacao['texto']?>"
                                                                      data-foto="<?php echo $atualizacao['src']?>" ><button class='vejamais atualizacao-botao'>Leia mais</button></a>
                </div>
            <?php endforeach;?>
            </div>

            <div class="propaganda-tratamento">
                <p class="titulo negrito">Tratamentos</p>
                <?php foreach($dados as $tratamento):?>
                    <div class="propaganda-individual">
                        <p class="sub-titulo negrito"><?php echo $tratamento["titulo"] ?></p>
                        <p><?php echo $tratamento["descricao"] ?></p>
                        <img src="assets/img/<?php echo $tratamento["src"] ?>" class="foto-propaganda">
                    </div>
                <?php endforeach;?>
                <a href="tratamentos.php"><button class='vejamais tratamento-botao'>Veja mais</button></a>
            </div>
        </div>
    </section>

        <div class="modal modal-maior" id="atualizacao-individual-1">
                <div class="modal-header">
                  <div class="titulo negrito"></div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <article>
                            <p>Ai você fala o seguinte: "- Mas vocês acabaram isso?" Vou te falar: -"Não, está em andamento!" Tem obras que "vai" durar pra depois de 2010. Agora, por isso, nós já não desenhamos, não começamos a fazer projeto do que nós "podêmo fazê"? 11, 12, 13, 14... Por que é que não?</p>

                            <p>Se hoje é o dia das crianças... Ontem eu disse: o dia da criança é o dia da mãe, dos pais, das professoras, mas também é o dia dos animais, sempre que você olha uma criança, há sempre uma figura oculta, que é um cachorro atrás. O que é algo muito importante!</p>
                            
                            <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.</p>
                            
                            <p>No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.</p>
                                                    
                    </article>
                </div>
            </div>
              <div id="overlay"></div>

        <!-- Atualização com Foto -->

        <div class="modal modal-maior" id="detalhe-atualizacao">
                    <div class="modal-header">
                      <div class="titulo negrito"><span id="titulo-modal-atualizacao"></span></div>
                      <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                            <img id="foto-modal" class="foto-propaganda modal-foto">
                        <article>
                                <p id="texto-modal"></p>
                                                        
                        </article>
                    </div>
                </div>
                  <div id="overlay"></div>


<?php	include_once 'footer.php';	?> 

<script>
$('.atualizacao-detalhe').on('click', function(){
    var titulo = $(this).data('titulo');
    var texto = $(this).data('texto');
    var foto = $(this).data('foto');

    console.log(titulo);
    document.getElementById('titulo-modal-atualizacao').innerHTML = titulo;
    document.getElementById('texto-modal').innerHTML = texto;
    document.getElementById('foto-modal').src = "../Admin/assets/upload/"+foto;

    
  });
</script>