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
				<article class="<?php echo 'main imagen-contenedor portada-'.$i ?>">
					<div class="detalles">
						<h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
						<p><?php echo "Desde $ ". get_field('precio') ?></p>
						<a href="<?php the_permalink(); ?>" class="boton primario texto-blanco"> Explorar Más</a>
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
		<!-- Vista movil de la cabecera del sitio  -->
		<div class="movil">
			<div class="slider-main">
				<?php while( $portada->have_posts() ) : $portada->the_post(); ?>
					<article class="<?php echo 'main slider-'.$i ?>">
						<div class="detalles">
							<h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
							<p><?php echo "$". get_field('precio') ?></p>
							<a href="<?php the_permalink(); ?>" class="boton primario texto-blanco"> Explorar Más</a>
						</div>
						<?php the_post_thumbnail(); ?>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div> <!-- FIn del maquetado movil de la cabecera del sitio -->
	</main> <!-- Fin del contenido principal -->
	<!-- Buscador -->
	<?php get_search_form(); ?>
	<!-- Fin del buscador de la web -->

	<?php get_template_part('templates/list', 'tours'); ?>

	<!-- Hero -->
	<?php 
		$imagenId = get_field('hero_inicio');
		/*
			Primer parametro, id de la imagen
			Segunda parametro, tamañao de la imagen, según lo predeterminado en wordpress o los definidos por el programador
		*/
		$imagenURL = wp_get_attachment_image_src($imagenId, 'full')[0];
	?>

	<section class="hero">
		<img src="<?php echo $imagenURL?>" alt="Machu Picchu todo poderoso">
		<div class="contenido-hero text-center">
			<h3 class=""> <?php the_field('titulo_hero'); ?> </h3>
			<p> <?php the_field('contenido_hero'); ?></p>
			<a href="#" class="boton secundario texto-blanco">Conoce más</a>
		</div>
	</section>
	<!-- Fin Hero -->

	<!-- Galeria -->
			
	<!-- Fin Galeria -->

	<!-- Testimonios -->
	<section class="testimonios">
		<h2 class="titulo-seccion text-center">
			Testimonios
		</h2>
	
		<?php
			$args = array(
				'post_type' => 'testimonios',
				'post_per_page' => 5,
				'order' => 'ASC'
			);

			$testimonios = new WP_Query($args);
		?>
		<div class="content-testimonios">
		<?php while($testimonios->have_posts()) : $testimonios->the_post(); ?>
			<div class="descripcion-testimonios">
				<h3 class="text-center"> <?php the_title(); ?> </h3>
				<p class="comentario"> <?php echo get_the_content(); ?> </p>
				<p> <span class="nombre"> <?php the_field('nombre_completo'); ?></span>, <span class="nacionalidad"> <?php the_field('nacionalidad'); ?></span> </p>	
			</div>
		<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</section> <!-- Fin Testimonios -->


	<!-- BLog -->
	<section class="blog-front">
		<h2 class="titulo-seccion text-center">
			Experiencias
		</h2>
		<?php 
		 	$args = array(
		 		'post_type' => 'historia',
		 		'post_per_page' => 3
		 	);

		 	$blog = new WP_Query($args);
		?>
		<div class="content-blog">
			<?php while($blog->have_posts()) : $blog->the_post(); ?>
				<article class="blog-list">
					<h3 class="titulo-blog"> <?php the_title(); ?> </h3>
					<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('blog'); ?> </a>
					<p class="resumen-blog"> <?php the_excerpt(); ?> </p>
					<hr>
					<a href="<?php the_permalink(); ?>" class="leer-mas-blog" target="_blank"> Leer más <i class="fas fa-angle-double-right"></i></a>
				</article>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</section>
	
	<!-- Fin Blog -->

	<!-- Destinos más emblematicos del Perú -->

	<!-- Fin Destinos más emblematicos del Perú -->

<?php get_footer(); ?>


