<?php get_header(); ?>

<?php 
	$destino = $_GET['destino'];
	$precio = intval($_GET['precio']);
	// echo gettype($precio);
	// $duracion = $_GET['dias'];	
?>

<section class="centrar-contenedor-90 tours" style="margin-top: 10rem;">
	
	<?php 
		# REALIZANDO LA CONSULTA CON LA OPCIÓN DEL WP_Query
		$args = array(
			'post_type' => 'tour',
			// Search Keyword (s)
			's' => $destino,
			'posts_per_page' => -1,
			'order' => 'ASC',
			'meta_key' => 'precio',
			// return  a number, meta_value => return a string, then 120 is 12 in text I supose
			'meta_value_num' => $precio,
			'meta_compare' => '<='
		);

		$busqueda = new WP_Query($args);
	?>
<?php  if( $busqueda->have_posts() ) :  ?>
			<h2 class="text-center">Tenemos estos destinos para ti</h2>
	<div class="content-tours">
		
		
			<?php while($busqueda->have_posts()) : $busqueda->the_post(); ?>
			<article class="tours-30 list-tour imagen-contenedor">
				<div class="image-tour">
					<a href="<?php the_permalink(); ?>">	<?php the_post_thumbnail(); ?> </a>
					<span class="duracion"><b>Duración:</b> <?php the_field("duracion_tour")?> </span>
				</div>
				<div class="descripcion-tour">
					<h4 class="titulo"> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h4>
					<p class="precio"><b>Desde: </b>  <span> <?php echo "$ ". get_field('precio');?> </span> </p>

					<!-- <hr> -->
					<!-- <a href="<?php the_permalink(); ?>" class="boton primario texto-blanco ver-tour"> Ver Tour </a> -->
				</div>
			</article>
		<?php endwhile; wp_reset_postdata();?>
	</div>
<?php else: ?>
	<h2 class="text-center">¡Lo sentimos! No encontramos destinos de ese tipo</h2>
<?php endif; ?>


</section>

<?php get_footer(); ?>