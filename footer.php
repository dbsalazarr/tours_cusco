	<!-- Footer -->
	<footer class="pie-pagina">
		<h3 class="titulo-seccion text-center">
			Más sobre Machupicchu Tours Cusco
		</h3>
		<div class="content-footer">
			<?php
				if( is_active_sidebar('footer_widget')){
					dynamic_sidebar('footer_widget');
				}
			?>

			<?php wp_footer(); ?>
		</div>
	</footer>
	<p class="text-center" style="font-family: var(--fuenteSecundaria);">Copyright &copy Todos los derechos reservados to Bremdows</p>
	<!-- Fin Footer -->
	</div>
</body>
</html>

