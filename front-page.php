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
		</div>
	</main> <!-- Fin del contenido principal -->
	<!-- Buscador -->
	<!-- Fin del buscador de la web -->



	<!-- Lista de tours de 1 a 30 días -->
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
		<div class="content-tours">
			<?php  while($tours->have_posts()) : $tours->the_post(); ?>
				<article class="tours-30 list-tour">
					<div class="image-tour">
						<?php the_post_thumbnail(); ?>
						<span class="duracion"><b>Duración:</b> <?php the_field("duracion_tour")?> </span>
					</div>
					<div class="descripcion-tour">
						<h4 class="titulo"> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h4>
						<span class="precio"><b>Desde: </b><?php echo "$ ". get_field('precio');?></span>

						<hr>
						<a href="<?php the_permalink(); ?>" class="boton principal ver-tour"> Ver Tour </a>
					</div>
				</article>
			<?php endwhile; wp_reset_postdata();?>
		</div>

	</section>

	<!-- Fin de la lista de 1 a 30 días -->

	<!-- Lista de tours de diferentes destinos del Perú -->
	<section class="tours">
		<h2 class="titulo-seccion text-center">
			Tours en diferentes destinos del Perú
		</h2>
		<?php
			$args = array(
				'post_type' => 'tour',
				'posts_per_page' => -1,
				'category_name' => 'destinos peru',
				'order' => 'ASC'
			);

			$tours = new WP_Query($args);
		?>
		<div class="content-tours">
			<?php  while($tours->have_posts()) : $tours->the_post(); ?>
				<article class="tours-30 list-tour">
					<div class="image-tour">
						<?php the_post_thumbnail(); ?>
						<span class="duracion"><b>Duración:</b> <?php the_field("duracion_tour")?> </span>
					</div>
					<div class="descripcion-tour">
						<h4 class="titulo"><?php the_title(); ?></h4>
						<span class="precio"><b>Desde: </b><?php echo "$ ". get_field('precio');?></span>

						<hr>
						<a href="<?php the_permalink(); ?>" class="boton principal ver-tour"> Ver Tour </a>
					</div>
				</article>
			<?php endwhile; wp_reset_postdata();?>
		</div>
	</section>
	<!-- Fin lista de tours de los diferentes destinos del Perú -->

	<!--  Tours Clasicos en Cusco-->
	<section class="tours">
		<h2 class="titulo-seccion text-center">
			Tours Clásicos en Cusco
		</h2>
		<?php
			$args = array(
				'post_type' => 'tour',
				'posts_per_page' => -1,
				'category_name' => 'clasicos cusco',
				'order' => 'ASC'
			);

			$tours = new WP_Query($args);
		?>
		<div class="content-tours">
			<?php  while($tours->have_posts()) : $tours->the_post(); ?>
				<article class="tours-30 list-tour">
					<div class="image-tour">
						<?php the_post_thumbnail(); ?>
						<span class="duracion"><b>Duración:</b> <?php the_field("duracion_tour")?> </span>
					</div>
					<div class="descripcion-tour">
						<h4 class="titulo"><?php the_title(); ?></h4>
						<span class="precio"><b>Desde: </b><?php echo "$ ". get_field('precio');?></span>

						<hr>
						<a href="<?php the_permalink(); ?>" class="boton principal ver-tour"> Ver Tour </a>
					</div>
				</article>
			<?php endwhile; wp_reset_postdata();?>
		</div>
	</section>
	<!-- Fin destinos clasicos en Cusco -->

	<!-- Camino Inca - Trekking a Machu Picchu -->
	<section class="tours">
		<h2 class="titulo-seccion text-center">
			Camino Inca - Trekking a Machu Picchu
		</h2>
		<?php
			$args = array(
				'post_type' => 'tour',
				'posts_per_page' => -1,
				'category_name' => 'camino inca',
				'order' => 'ASC'
			);

			$tours = new WP_Query($args);
		?>
		<div class="content-tours">
			<?php  while($tours->have_posts()) : $tours->the_post(); ?>
				<article class="tours-30 list-tour">
					<div class="image-tour">
						<?php the_post_thumbnail(); ?>
						<span class="duracion"><b>Duración:</b> <?php the_field("duracion_tour")?> </span>
					</div>
					<div class="descripcion-tour">
						<h4 class="titulo"><?php the_title(); ?></h4>
						<span class="precio"><b>Desde: </b><?php echo "$ ". get_field('precio');?></span>

						<hr>
						<a href="<?php the_permalink(); ?>" class="boton principal ver-tour"> Ver Tour </a>
					</div>
				</article>
			<?php endwhile; wp_reset_postdata();?>
		</div>
	</section>
	<!-- Fin Camino Inca - Trekking a Machu Picchu-->

	<!-- Tours de Aventura en Cusco y Alrededores -->
	<section class="tours">
		<h2 class="titulo-seccion text-center">
			Tours de Aventura en Cusco y Alrededores
		</h2>
		<?php
			$args = array(
				'post_type' => 'tour',
				'posts_per_page' => -1,
				'category_name' => 'aventura en cusco',
				'order' => 'ASC'
			);

			$tours = new WP_Query($args);
		?>
		<div class="content-tours">
			<?php  while($tours->have_posts()) : $tours->the_post(); ?>
				<article class="tours-30 list-tour">
					<div class="image-tour">
						<?php the_post_thumbnail(); ?>
						<span class="duracion"><b>Duración:</b> <?php the_field("duracion_tour")?> </span>
					</div>
					<div class="descripcion-tour">
						<h4 class="titulo"><?php the_title(); ?></h4>
						<span class="precio"><b>Desde: </b><?php echo "$ ". get_field('precio');?></span>

						<hr>
						<a href="<?php the_permalink(); ?>" class="boton principal ver-tour"> Ver Tour </a>
					</div>
				</article>
			<?php endwhile; wp_reset_postdata();?>
		</div>
	</section>
	<!-- Fin Tours de Aventura en Cusco y Alrededores -->

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
	
	<!-- Galeria -->
			
	<!-- Fin Galeria -->

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
		</div>
	</section>
	<!-- Fin Hero -->


	<!-- BLog -->

	<section class="blog">
		<h2 class="titulo-seccion text-center">
			Experiencias
		</h2>
		<?php 
		 	$args = array(
		 		'post_type' => 'blog',
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
					<a href="<?php the_permalink(); ?>" class="leer-mas-blog" target="_blank"> Leer más </a>
				</article>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</section>

	<!-- Fin Blog -->

	<!-- Destinos más emblematicos del Perú -->

	<!-- Fin Destinos más emblematicos del Perú -->

<?php get_footer(); ?>


