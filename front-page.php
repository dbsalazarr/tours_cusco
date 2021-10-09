<?php get_header(); ?>
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
				<article class="<?php echo 'portada-'.$i ?>">
					<div class="detalles">
						<h2> <?php the_title(); ?> </h2>
						<?php the_excerpt(); ?>
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
		<div class="movil slider-main">
			<?php while( $portada->have_posts() ) : $portada->the_post(); ?>
				<article class="<?php echo 'slider-'.$i ?>">
					<div class="detalles">
						<h2> <?php the_title(); ?> </h2>
						<?php the_excerpt(); ?>
					</div>
					<?php the_post_thumbnail(); ?>
				</article>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</main>
<?php get_footer(); ?>