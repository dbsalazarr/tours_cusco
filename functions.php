<?php 
	# Activar, desactivar caracteristicas de nuestro tema

	function tours_cusco_setup(){
		// Añadiendo las imagenes personalizadas
		add_theme_support("post-thumbnails");
		// Añadiendo el soporte de titulos personalizados
		add_theme_support("title-tag");

		// Agregando detalles para un logo personalizado
		$imagen = array(
			'height' => 36,
			'width' =>  119
		);
		add_theme_support('custom-logo', $imagen);

		// Registrando nuevos tamaños de imagen (nombre, ancho, alto, recorte)
		add_image_size('slider', 1024, 850,true);
		add_image_size('largue', 410, 850, true);
		add_image_size('square', 482, 415, true);
		add_image_size('rectangle', 933, 415, true);

	}
	add_action("after_setup_theme", "tours_cusco_setup");


	function tours_cusco_scripts(){

		// Registrando los estilos CSS
		wp_register_style("normalize", get_template_directory_uri().'/css/normalize.css', array(), '8.0.13');
		wp_register_style("style", get_stylesheet_uri(), array('normalize', 'bxslidercss'), '1.0', 'all');
		wp_register_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Jost:wght@400;700&family=Montserrat:wght@300;400;700&display=swap', array(), '1.0');
		wp_register_style("bxslidercss", 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array(), '4.2.12');

		wp_enqueue_style("normalize");
		wp_enqueue_style("google-fonts");
		wp_enqueue_style("style");
		

		// Registrando los archivos JS

		wp_register_script("mycodejs", get_template_directory_uri().'/js/mycode.js', array(), '1.0', true);
		wp_register_script("bxsliderjs", 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery', 'mycodejs'), '4.2.12', true);
		wp_register_script('fontawesome', 'https://kit.fontawesome.com/69b5ee1732.js', array(), 'last-version', true);
		
		wp_enqueue_script("jquery");
		
		wp_enqueue_script('mycodejs');
		wp_enqueue_script('fontawesome');

		// Condicionando el agrego de la libreria para el slider de la web en modo movil
		if( is_page('inicio')){
			wp_enqueue_style("bxslidercss");
			wp_enqueue_script("bxsliderjs");
		}

		
	}
	add_action("wp_enqueue_scripts", "tours_cusco_scripts");


	function tours_cusco_menus(){
		register_nav_menus(array(
			'menu_principal' => __('Menú principal', 'Machupicchu Tours Cusco'),
			'menu_social' => __('Menú social', 'Machupicchu Tours Cusco Social'),
			'menu_footer' => __('Menú footer', 'Machupicchu Tours Cusco Footer')
		));

	}
	add_action("init", "tours_cusco_menus");


	// Creando los CTP Custom Post Types

	function tours_cusco_recorridos(){
		$labels = array(
			'name' => _x('Tours','machupicchutourscusco'),
			'singular_name' => _x('Tours','post type singular name','machupicchutourscusco'),
			'menu_name' => _x('Tours','admin menu','machupicchutourscusco'),
			'name_admin_bar' => _x('Tour','add new on admin bar','machupicchutourscusco'),
			'add_new' => _x('Add New Tour','book','machupicchutourscusco'),
			'add_new_item' => _x('Add New Tour','machupicchutourscusco'),
			'new_item' => _x('New Tour','machupicchutourscusco'),
			'edit_item' => _x('Edit Tour','machupicchutourscusco'),
			'view_item' => _x('View Tour','machupicchutourscusco'),
			'all_items' => _x('All Tours','machupicchutourscusco'),
			'search_items' => _x('Search Tour','machupicchutourscusco'),
			'parent_item_colon' => _x('Parent Tour','machupicchutourscusco'),
			'not_found' => _x('No Tour Found','machupicchutourscusco'),
			'not_found_in_trash' => _x('No Tour found in Trash','machupicchutourscusco')
		);

		$args = array(
			'labels' => $labels,
			'description' => __('Descripcion','Machupicchu Tours Cusco'),
			'public' => true,
			'publicity_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => array('slug','tour'),
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => 6,
			'supports' => array('title','editor','thumbnail'),
			'show_in_rest' => true, // Activa el nuevo editor de Bloques Gutenberg
			'taxonomies' => array('category'),
			'menu_icon' => 'dashicons-airplane'
		);

		register_post_type('tour',$args);
	}
	add_action('init','tours_cusco_recorridos');

?>