<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- MENÚ DE NAVEGACIÓN -->
	<div class="contenedor">
	<div class="content-nav-principal">
		<div class="logo">
			<?php 
				if(function_exists('the_custom_logo')) :
					the_custom_logo();
				endif;
			 ?>
		</div>

		<!-- Definiendo el menú de navegación principal-->
		<?php
			$menu_principal = array(
				'theme_location' => 'menu_principal',
				'container' => 'nav',
				'container_class' => 'nav-principal nav-page',
				'container_id' => 'nav-principal'
			);
			wp_nav_menu($menu_principal);
		?>

		<div class="bar-menu">
			<i style="font-size:2rem" class="fas fa-bars"></i>
			Ménu
		</div>
		<!-- Definiendo el menú de navegación social -->
		<?php 
			$menu_social = array(
				'theme_location' => 'menu_social',
				'container' => 'nav',
				'container_class' => 'nav-social nav-page',
				'container_id' => 'nav-social',
				'link_before' => '<span class="sr-text">',
				'link_after' => '</span>'
			);
			wp_nav_menu($menu_social);
		?>
	</div>