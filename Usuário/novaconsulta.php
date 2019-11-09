<?php
        include_once 'topo.php';
        include_once 'assets\classes\consulta\consultaDao.php';
        include_once 'entrar.php';

    $idPaciente = $_SESSION['id'];
  
    $consultaDao = new ConsultaDao();

    $dados=$consultaDao->listaDentistas();

    $dados1=$consultaDao->listaPacientesID($idPaciente);

    ?>
<html>

        
        <section>
            <div class="container">
                    <div class="formulario-consulta">
                        <p class="titulo-pagina negrito consulta-titulo">Nova Consulta</p>  
                    <div class="formulario">
                        <form action="consultaConfirma.php" method="POST">
                            <?php foreach($dados1 as $paciente):?>
                                <label>Nome: </label><input type="text" value="<?php echo $paciente['nome']?>">
                                <input type="hidden" name="paciente" value="<?php echo $paciente['idPaciente']?>">
                            <?php endforeach;?>
                            <label> Dentistas: </label>
                            <select name="dentista" >
                                <?php foreach($dados as $dentista):?>
                                        <option value="<?php echo $dentista['idDentista']?>" id="<?php echo $dentista['idDentista']?>"><?php echo $dentista['nomeDentista']?></option>
                                <?php endforeach;?>
                            </select>
                
                        <label>Horário: </label><input type="time" id="hora" name="horario" min="09:00" max="18:00" step="1800">

                        <label>Data: </label><input type="date" id="data" name="data" >
        
                        <label>Mensagem (opcional):</label> <textarea id="mensagem-consulta"></textarea>
                        <input type="submit" value="Marcar Consulta" class="botao-disponibilidade">
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