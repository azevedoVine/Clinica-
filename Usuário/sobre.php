<?php  include_once 'topo.php';
	   include_once 'assets\classes\sobre\sobreDao.php';

	$sobreDao = new SobreDao();

	$dados=$sobreDao->listaSobre();

?>
<html>

        <section>
            <div class="container">				
				<div id="mapa-sobre">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3423.4924020834615!2d-55.53503268567958!3d-30.900857881578847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a9fe5efe99ce3f%3A0x6ac41211a41a9d12!2sIFSul+Sant&#39;Ana+do+Livramento!5e0!3m2!1sen!2sbr!4v1566346633799!5m2!1sen!2sbr" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				 
                <div class="horario">
                    <p class="titulo-pagina">Horários de Atendimento</p>
					<?php foreach($dados as $sobre):?>
                    <p> <span class="negrito sub-titulo"> <?php echo $sobre['dia']?>:  </span> <?php echo $sobre['manha']?> AM, <?php echo $sobre['tarde']?> PM</p>
					<?php endforeach?>
                </div>
            </div>
        </section>
<?php
	include_once 'footer.php';
	?> 