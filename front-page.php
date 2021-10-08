<?php get_header(); ?>
	<main class="contenido-principal">
		<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 5
			);
			$i = 1;

			$portada = new WP_Query($args);
			
		?>
		<?php  while( $portada->have_posts() ) : $portada->the_post(); ?>

			<?php $sizeImage = "largue"; ?>
			<article class="<?php echo 'portada-'.$i ?>">
				<h2> <?php the_title(); ?> </h2>
				<?php if($i == 2) : ?>
					<?php $sizeImage = "square" ?>
				<?php endif; ?>
				<?php the_post_thumbnail($sizeImage); ?>
			</article>

			<?php $i++; ?>
		<?php endwhile; wp_reset_postdata(); ?>

	</main>
<?php get_footer(); ?>