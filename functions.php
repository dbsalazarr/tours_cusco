<?php 
	# Activar, desactivar caracteristicas de nuestro tema

	function tours_cusco_setup(){
		// Añadiendo las imagenes personalizadas
		add_theme_support("post-thumbnails");
		// Añadiendo el soporte de titulos personalizados
		add_theme_support("title-tag");

		// Registrando nuevos tamaños de imagen


	}
	add_action("after_setup_theme", "tours_cusco_setup");

	function tours_cusco_scripts(){

		// Registrando los estilos CSS
		wp_register_style("normalize", get_template_directory_uri().'/css/normalize.css', array(), '8.0.13');
		wp_register_style("style", get_stylesheet_uri(), array('normalize'), '1.0', 'all');
		wp_register_style('google-fonts', '', array('normalize', 'style'), '1.0');

		wp_enqueue_style("normalize");
		wp_enqueue_style("style");
		wp_enqueue_style("google-fonts");

		// Registrando los archivos JS

		wp_register_script("mycodejs", get_template_directory_uri().'/js/mycode.js', array(), '1.0', true);
		
		wp_enqueue_script("jquery");
		wp_enqueue_script('mycodejs');

		
	}
	add_action("wp_enqueue_scripts", "tours_cusco_scripts");

?>