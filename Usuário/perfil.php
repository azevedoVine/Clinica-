<?php
			include_once 'topo.php';
		?>
<html>

            <section>
                <div class="container">
                    <div class="info-user">
                    <i class="fas fa-user foto-usuario"></i>
                        <div class="dados-user">
                            <p><span class="negrito">Nome: </span>Jenovevo Catarrinho</p>
                            <p><span class="negrito">Email: </span>Catarrinho@gmail.com</p>
                            <a class="negrito mais-info-link" href="#">Mais informações <i class="fas fa-plus icone-mais"></i></a>
                        </div>
                        <div class="div-calendario">
                            <div class="calendario">
                            <div class="calendar">
                            <div class="calendar-footer">
                                <div class="next-prev">
                                <div class="btn prev-btn">prev</div>
                                <div class="btn next-btn">next</div>
                                </div>
                                <div class="options">
                                <div class="btn jump-today">Today</div>
                                <div class="btn cancel-btn">Cancel</div>
                                <div class="btn ok-btn">Ok</div>
                                </div>
                            </div>
                            </div>
                            </div>
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

            <script>
                let c = $('.calendar');
                let calendar = new Calendar(c);
                // console.log(calendar.getSelectedDate().day);
                // console.log(c.find(0));
                c.find('.ok-btn').on('click', function() {console.log(calendar.getSelectedDate().fullDate)});
            </script>

            <script type="text/javascript">

                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-36251023-1']);
                _gaq.push(['_setDomainName', 'jqueryscript.net']);
                _gaq.push(['_trackPageview']);

                (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();

            </script>
<?php
	include_once 'footer.php';
	?> 