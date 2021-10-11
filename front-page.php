<?php get_header(); ?>
	<!-- Contenido principal -->
	<main class="contenido-principal">
		<?php
			$args = array(
				'post_type' => 'tour',
				'posts_per_page' => 5,
				'category_name' => 'mas populares',
				'order' => 'ASC'
			);
			$i = 1;

			$portada = new WP_Query($args);
			
		?>
		<div class="escritorio">
			<?php  while( $portada->have_posts() ) : $portada->the_post(); ?>

				<?php $sizeImage = ""; ?>
				<article class="<?php echo 'main portada-'.$i ?>">
					<div class="detalles">
						<h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
						<p><?php echo "Desde S/. ". get_field('precio') ?></p>
					</div>
					<?php 
						switch($i) :
							case 1:
								$sizeImage = "largue";
							break;
							case 2:
								$sizeImage = "square";
							break;
							case 3:
							case 4:
								$sizeImage = "rectangle";
							break;
							case 5:
								$sizeImage = "square";
							break;
							default:
								$sizeImage = "";
							break;
						endswitch;
					 ?>
					<?php the_post_thumbnail($sizeImage); ?>
				</article>
				<?php $i++; ?>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
		<div class="movil">
			<div class="slider-main">
				<?php while( $portada->have_posts() ) : $portada->the_post(); ?>
					<article class="<?php echo 'main slider-'.$i ?>">
						<div class="detalles">
							<h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
							<p><?php echo "$". get_field('precio') ?></p>
						</div>
						<?php the_post_thumbnail(); ?>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</main> <!-- Fin del comentario principal -->
	<!-- Buscador -->
	<!-- Fin del buscador de la web -->



	<!-- Lista de tours -->
	<section class="tours">
		<h2 class="titulo-seccion text-center">
			Tours de 1 a 30 días en todo Perú
		</h2>
	
		<?php
			$args = array(
				'post_type' => 'tour',
				'posts_per_page' => -1,
				'category_name' => 'tour 1 a 30 dias',
				'order' => 'ASC'
			);

			$tours = new WP_Query($args);
		?>

		<?php  while($tours->have_posts()) : $tours->the_post(); ?>
			<article class="tours-30 list-tour">
				<?php the_post_thumbnail(); ?>
				<div class="descripcion-tour">
					<h4><?php the_title(); ?></h4>
					<span><b>Duración:</b> <?php the_field("duracion_tour")?> </span>
					<span><b>Desde: </b><?php echo "$ ". get_field('precio');?></span>
					<a href="<?php the_permalink(); ?>" class="boton"> Ver Tour </a>
				</div>
			</article>
		<?php endwhile; wp_reset_postdata();?>

	</section>

	<!-- Fin de la lista de tours 1-5 días -->

	<!-- Lista de tours de 6 - 30 días -->
	<section class="tour-algo">

	</section>
	<!-- Fin lista de tours de 6-30 días -->
<?php get_footer(); ?>