<!-- Lista de tours de 1 a 30 días -->
	<?php
		if( is_page('tours') ) {
			$cantidadTours = -1;
			$enlace = "";
		}else{
			$cantidadTours = 7;
			$enlace = "<p class='text-center'><a href='https://www.machupicchutourscusco.com/tours' class='all-tours'>Ver todos los tours</a></p>";
		}
	?>
	<section class="tours">
		<h2 class="titulo-seccion text-center">
			Tours de 1 a 25 días en todo Perú
		</h2>
	
		<?php
			$args = array(
				'post_type' => 'tour',
				'posts_per_page' => $cantidadTours,
				'category_name' => 'tour 1 a 30 dias',
				'order' => 'ASC'
			);

			$tours = new WP_Query($args);
		?>
		<div class="content-tours">
			<?php  while($tours->have_posts()) : $tours->the_post(); ?>
				<article class="tours-30 list-tour imagen-contenedor">
					<div class="image-tour">
						<a href="<?php the_permalink(); ?>">	<?php the_post_thumbnail(); ?> </a>
						<span class="duracion"><b> <i class="fas fa-clock" style="margin-right: .5rem;"></i> </b> <?php the_field("duracion_tour")?> </span>
					</div>
					<div class="descripcion-tour">
						<h4 class="titulo"> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h4>
						<p class="precio"><b>Desde: </b>  <span> <?php echo "$ ". get_field('precio');?> </span> </p>
					</div>
				</article>
			<?php endwhile; wp_reset_postdata();?>
		</div>
		<?php echo $enlace; ?>
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
				'posts_per_page' => $cantidadTours,
				'category_name' => 'destinos peru',
				'order' => 'ASC'
			);

			$tours = new WP_Query($args);
		?>
		<div class="content-tours">
			<?php  while($tours->have_posts()) : $tours->the_post(); ?>
				<article class="tours-30 list-tour">
					<div class="image-tour">
						<a href="<?php the_permalink(); ?> "> <?php the_post_thumbnail(); ?> </a>
						<span class="duracion"><b><i class="fas fa-clock" style="margin-right: .5rem;"></i></b> <?php the_field("duracion_tour")?> </span>
					</div>
					<div class="descripcion-tour">
						<h4 class="titulo"> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h4>
						<p class="precio"><b>Desde: </b>  <span> <?php echo "$ ". get_field('precio');?> </span> </p>
					</div>
				</article>
			<?php endwhile; wp_reset_postdata();?>
		</div>
		<?php echo $enlace; ?>
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
				'posts_per_page' => $cantidadTours,
				'category_name' => 'clasicos cusco',
				'order' => 'ASC'
			);

			$tours = new WP_Query($args);
		?>
		<div class="content-tours">
			<?php  while($tours->have_posts()) : $tours->the_post(); ?>
				<article class="tours-30 list-tour">
					<div class="image-tour">
						<a href="<?php the_permalink(); ?> ">	<?php the_post_thumbnail(); ?> </a>
						<span class="duracion"><b><i class="fas fa-clock" style="margin-right: .5rem;"></i></b> <?php the_field("duracion_tour")?> </span>
					</div>
					<div class="descripcion-tour">
						<h4 class="titulo"> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h4>
						<p class="precio"><b>Desde: </b>  <span> <?php echo "$ ". get_field('precio');?> </span> </p>
					</div>
				</article>
			<?php endwhile; wp_reset_postdata();?>
		</div>
		<?php echo $enlace; ?>
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
				'posts_per_page' => $cantidadTours,
				'category_name' => 'camino inca',
				'order' => 'ASC'
			);

			$tours = new WP_Query($args);
		?>
		<div class="content-tours">
			<?php  while($tours->have_posts()) : $tours->the_post(); ?>
				<article class="tours-30 list-tour">
					<div class="image-tour">
						<a href="<?php the_permalink(); ?> ">	<?php the_post_thumbnail(); ?> </a>
						<span class="duracion"><b><i class="fas fa-clock" style="margin-right: .5rem;"></i></b> <?php the_field("duracion_tour")?> </span>
					</div>
					<div class="descripcion-tour">
						<h4 class="titulo"> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h4>
						<p class="precio"><b>Desde: </b>  <span> <?php echo "$ ". get_field('precio');?> </span> </p>
					</div>
				</article>
			<?php endwhile; wp_reset_postdata();?>
		</div>
		<?php echo $enlace; ?>
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
				'posts_per_page' => $cantidadTours,
				'category_name' => 'aventura en cusco',
				'order' => 'ASC'
			);

			$tours = new WP_Query($args);
		?>
		<div class="content-tours">
			<?php  while($tours->have_posts()) : $tours->the_post(); ?>
				<article class="tours-30 list-tour">
					<div class="image-tour">
						<a href="<?php the_permalink(); ?> ">	<?php the_post_thumbnail(); ?> </a>
						<span class="duracion"><b><i class="fas fa-clock" style="margin-right: .5rem;"></i></b> <?php the_field("duracion_tour")?> </span>
					</div>
					<div class="descripcion-tour">
						<h4 class="titulo"> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h4>
						<p class="precio"><b>Desde: </b>  <span> <?php echo "$ ". get_field('precio');?> </span> </p>
					</div>
				</article>
			<?php endwhile; wp_reset_postdata();?>
		</div>
		<?php echo $enlace; ?>
	</section>
	<!-- Fin Tours de Aventura en Cusco y Alrededores -->