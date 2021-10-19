<?php get_header(); ?>

	<br>
	<article class="centrar-contenedor">
		<header class="cabecera-historia">
			<h3 class="titulo-seccion text-center"> <?php the_title(); ?> </h3>
			<ul class="datos-redactor">
				<li>  <i class="fas fa-user-edit"></i>  <span class="autor"> <?php the_author(); ?> </span> </li>
				<li>  <i class="fas fa-calendar-alt"></i> <span class="fecha-publicacion"> <?php the_time( get_option('date_format') ); ?> </span></li>
			</ul>
		</header>
		<div class="content-sidebar">
			<div class="contenido contenido-historia">
				<div class="imagen-tour">
					<?php the_post_thumbnail(); ?>
				</div>
				<?php the_content(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</article>
<?php get_footer(); ?>