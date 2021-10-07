<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<?php wp_head(); ?>
</head>
<body>
	<!-- MENÚ DE NAVEGACIÓN -->
	<div class="content-nav-principal">
		<div class="logo">
			<?php 
				if(function_exists('the_custom_logo')) :
					the_custom_logo();
				endif;
			 ?>
		</div>
		<div class="menu-principal">
			<!-- Definiendo el menú de navegación principal-->

		</div>
		<div class="menu-social">
			<!-- Definiendo el menú de navegación social -->
			
		</div>
	</div>