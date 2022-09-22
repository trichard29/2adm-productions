<?php


    // Pages d'options
    if( function_exists( 'acf_add_options_page' ) ) {
        
        acf_add_options_page( array(
            'page_title' 	=> 'Options du thème',
            'menu_title'	=> 'Options',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false,
            'position'    	=> 2
        ) );	
    }

    function register_acf_block_types() {

        acf_register_block_type( array(
            'name'              => 'Bloc test masonry ',
            'title'             => 'Bloc test masonry',
            'description'       => "Liste de classes + images + heading en fonction de la classe",
            'render_template'   => 'blocks/masonry.php',
            'category'          => 'formatting', 
            'icon'              => 'layout', 
            'keywords'          => array( 'plugin', 'extension', 'add-on' )
        ) );
    }

