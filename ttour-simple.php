<?php 
/*
	Template Name: Tour Simple Page
	Template Post Type: tour
*/
?>
<?php get_header(); ?>
	<article class="centrar-contenedor-60" style="margin-top: 10rem;">
		<?php while(have_posts()) : the_post(); ?>

			<h2 class="text-center"><?php the_title(); ?></h2>
			<header class="cabecera-tour">
				<div class="imagen-tour">
					<?php the_post_thumbnail('square'); ?>
				</div>
				
				<div class="resumen-tour">
					<h3>Detalles del Tour</h3>
					<ul>
						<li>
							<p><i class="fas fa-shoe-prints"></i> <span>Lugar/es a visitar</span></p>
							
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
						</li>
						<li>
							<p><i class="far fa-calendar-check"></i> <span>Duración</span></p>
							<p> 
								<?php the_field('duracion_tour') ?> </p>
							</p>
						</li>
						<li>
							<p><i class="fas fa-dollar-sign"></i> <span>Desde</span></p>
							<p>
								<?php echo "$ ". get_field('precio') ?>
							</p>
						</li>
					</ul>
					<a href="https://web.whatsapp.com/send?phone=51974678364&text=Hola, estoy interesad@ en el tour <?php the_title(); ?>" target="_blank" class="boton primario texto-blanco"><i class="fab fa-whatsapp"></i> Contáctanos </a>
				</div>

			</header>
			<div class="contenido contenido-tour">
				<?php the_content(); ?>
			</div>

			<footer>
				<h4>También puede visitar: </h4>
			</footer>
			
		<?php endwhile;?>
	</article>

<?php get_footer(); ?>

