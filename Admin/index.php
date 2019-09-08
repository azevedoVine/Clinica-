<?php include_once "topo.php";
?>
			
		<section>			
		<div>
			<canvas id="grafico" width="400" height="400"></canvas>
		</div>
		</section>

		<div class="modal" id="excluir">
                <div class="modal-header">
                  <div class="titulo negrito">Excluir</div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <article>
							<p>Tem certeza que deseja excluir "Noticia Tal"?</p>
							<button>Excluir</button>
							<button data-close-button>Cancelar</button>
                    </article>
                </div>
            </div>
              <div id="overlay"></div>

<?php include_once "footer.php"

?>