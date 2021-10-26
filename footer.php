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
			<div class="footer-widget">
				<h4>Tours Destacados</h4>
				<?php 
					$args = array(
						'post_type' => 'tour',
						'post_per_page' => 5,
						'category_name' => 'mas populares',
						'orderny' => 'rand'
					);
					$destacados = new WP_Query($args);
				?>
				<ul>
					<?php while($destacados->have_posts()) : $destacados->the_post(); ?>
						<li><i class="fas fa-map-marker-alt"></i> <a href="<?php the_permalink(); ?>">  <?php the_title(); ?> </a> </li>
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>	
			</div>

			<?php wp_footer(); ?>
		</div>
	</footer>
	<p class="text-center" style="font-family: var(--fuenteSecundaria);">Copyright &copy Todos los derechos reservados to Machupicchu Tours Cusco</p>
	<p class="text-center" style="font-family: var(--fuenteSecundaria); font-size: 1.4rem; margin:0;">Code by bremdows</p>
	<!-- Fin Footer -->
	</div>
</body>
</html>

