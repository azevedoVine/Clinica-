<?php
        include_once 'topo.php';
        include_once 'assets\classes\consulta\consultaDao.php';

    $idPaciente = 1;
    
    $consultaDao = new ConsultaDao();

    $dados=$consultaDao->novaConsultaLista();

    var_dump($dados);

    ?>
<html>

        
        <section>
            <div class="container">
                    <div class="formulario-consulta">
                        <p class="titulo-pagina negrito consulta-titulo">Nova Consulta</p>  
                    <div class="formulario">
                        <form action="consulta-confirma.php" method="POST">

                            <label>Nome: </label><input type="text" name="name" placeholder="Jenovevo User">

                            <label> Dentistas: </label>
                            <select name="dentistas" >
                                <?php foreach($dados as $dentista):?>
                                        <option value="<?php echo $dentista['nomeDentista']?>" id="<?php echo $dentista['idDentista']?>"><?php echo $dentista['nomeDentista']?></option>
                                <?php endforeach;?>
                            </select>
                
                        <label>Horário: </label><input type="time" id="hora" name="horario" min="09:00" max="18:00">
        
                        <label> Especialidades: </label>
                            <select name="especialidades">
                                <?php foreach($dados as $dentista):?>
                                        <option value="<?php echo $dentista['especializacao']?>" id="<?php echo $dentista['idDentista']?>"><?php echo $dentista['especializacao']?></option>
                                <?php endforeach;?>
                            </select>
                        
                        <label>Mensagem (opcional):</label> <textarea id="mensagem-consulta"></textarea>
                        <input type="submit" value="Verificar Disponibilidade" class="botao-disponibilidade">
                        </form>
                    </div>
                </div>
            
                <div class="propaganda-tratamento">
                        <p class="titulo negrito">Tratamentos</p>
                        <div class="propaganda-individual">
                            <p class="sub-titulo negrito">Clareamento</p>
                            <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho.</p>
                            <img src="assets/img/clareamento.jpg" class="foto-propaganda">
                        </div>
                        <div class="propaganda-individual">
                            <p class="sub-titulo negrito">Aparelho Odontológico</p>
                            <p>Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho.</p>
                            <img src="assets/img/aparelho-ortodontico.jpg" class="foto-propaganda">
                            <a href="tratamentos.html"><button class='vejamais tratamento-botao'>Veja mais</button></a>
                        </div>
                    </div>
            </div>
        </section>

<?php
	include_once 'footer.php';
	?> 