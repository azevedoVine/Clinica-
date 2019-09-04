<?php
			include_once 'topo.php';
		?>
<html>

        
        <section>
            <div class="container">
                                    
                
                         
                    <div class="formulario-consulta">
                        <p class="titulo-pagina negrito consulta-titulo">Nova Consulta</p>  
                    <div class="formulario">
                        
                        <form>

                            <label>Nome: </label><input type="text" name="name" placeholder="Jenovevo User">

                            <label> Dentistas: </label>
                            <select name="dentistas" >
                                    <option value="dent1">Qualquer um</option>
                                    <option value="dent2">Joeferson</option>
                                    <option value="dent3">Jalma</option>
                                    <option value="dent4">Gumercinda</option>
                            </select>
                
                        <label>Horário: </label><input type="time" id="appt" name="horario" min="09:00" max="18:00">
        
                        <label> Especialidades: </label>
                            <select name="especialidades">
                                    <option value="esp1">Esp1</option>
                                    <option value="esp2">Esp2</option>
                                    <option value="esp3">Esp3</option>
                                    <option value="esp4">Esp4</option>
                            </select>
                        
                        <label>Mensagem (opcional):</label> <textarea></textarea>
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