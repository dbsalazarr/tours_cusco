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
			<p class="ruta-tour"><a href="https://www.machupicchutourscusco.com">Inicio</a><span><i class="fas fa-chevron-right"></i></span><a href="https://www.machupicchutourscusco.com/tours">Tours</a><span><i class="fas fa-chevron-right"></i></span><?php the_title(); ?> </p>
			<header class="cabecera-tour">
				<div class="imagen-tour">
					<?php the_post_thumbnail('square'); ?>
				</div>
				
				<div class="precio-desde">
					<h3 class="text-center"> Desde </h3>	
					<p class="text-center" style="font-size: 4rem;"> <?php echo "$ ". get_field('precio') ?> </p>
					<a href="https://web.whatsapp.com/send?phone=51974678364&text=Hola, estoy interesad@ en el tour <?php the_title(); ?>" target="_blank" class="boton primario texto-blanco" style="margin: 0 auto; display: block;"><i class="fab fa-whatsapp"></i> Contáctanos </a>
				</div>
				<ul class="resumen-tour">
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
									echo "<b>" . $lugares ."</b>";
								}		
							?>
						</p>
					</li>
					<li>
						<p><i class="far fa-calendar-check"></i> <span>Duración</span></p>
						
						<p> <b><?php the_field('duracion_tour') ?></b> </p>
					</li>
				</ul>

			</header>
			<div class="contenido contenido-tour">
				<?php the_content(); ?>
			</div>			
		<?php endwhile;?>
		<footer>
				<h4>También puede visitar: </h4>
				<?php 
					$args = array(
						'post_type' => 'tour',
						'post_per_page' => 10,
						'orderby' => 'rand'
					);

					$recomendados = new WP_Query($args);
				?>
				<div class="tour-recomendados">
					<ul>
						<?php while($recomendados->have_posts()) : $recomendados->the_post(); ?>
							<li> <i class="fas fa-suitcase-rolling"></i> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></li>
						<?php endwhile; wp_reset_postdata(); ?>
					</ul>
				</div>
				
		</footer>
	</article>

<?php get_footer(); ?>

