<?php 
/*
	Template Name: Tour Simple Page
	Template Post Type: tour
*/
?>
<?php get_header(); ?>
	<article class="centrar-contenedor-60">
		<?php while(have_posts()) : the_post(); ?>

			<h2><?php the_title(); ?></h2>

			<header class="cabecera-tour">
				<div class="imagen-tour">
					<?php the_post_thumbnail('square'); ?>
				</div>
				
				<div class="resumen-tour">
					<h3>Detalles del Tour</h3>
					<ul>
						<li>
							<p><i class="far fa-calendar-check"></i></p>
							<h5>Duración</h5>
							<p> <?php the_field('duracion_tour') ?> </p>
						</li>
						<li>
							<p><i class="fas fa-dollar-sign"></i></p>
							<h5>Desde</h5>
							<p> <?php echo "$ ". get_field('precio') ?> </p>
						</li>
						<li>
							<p><i class="fas fa-shoe-prints"></i></p>
							<h5>Lugar/es a visitar</h5>
							<p>
								<?php
									$lugaresCusco = get_field('lugares_cusco');
									$otrosLugares = get_field('otros_lugares');

									$lugares = "";

									if( gettype($lugaresCusco) == "NULL" && gettype($otrosLugares) == "NULL"){
										echo "Por definir";
									}else{
										foreach($lugaresCusco as $lugar) :
											$lugares .= $lugar . ", ";
										endforeach;
										foreach($otrosLugares as $lugar) :
											$lugares .= $lugar. ", ";
										endforeach;
										echo $lugares;
									}	
								?>
							</p>
						</li>
					</ul>
					<div class="boton primario texto-negro"><i class="fab fa-whatsapp"></i> Contactanos </div>
				</div>

			</header>
			<div class="contenido-tour">
				<?php the_content(); ?>
			</div>

			<footer>
				<h4>También puede visitar: </h4>
			</footer>
			
		<?php endwhile;?>
	</article>

<?php get_footer(); ?>

