<?php

    //Custom post type
    add_action( 'init', 'register_post_types' );
    function register_post_types() {
        // CPT Réalisations
        $labels = array(
            'name' => 'Nos réalisations',
            'all_items' => 'Toutes les réalisations',  // affiché dans le sous menu
            'singular_name' => 'Réalisation',
            'add_new_item' => 'Ajouter une réalisation',
            'edit_item' => 'Modifier la réalisation',
            'menu_name' => 'Réalisations',
            'render-template' => 'template-nos-realisations.php'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes'),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-admin-customizer',
        );

	register_post_type( 'nos-realisations', $args );
    }

    //Menu
    add_action( 'init', 'wppln_mes_menus' );
    function wppln_mes_menus() {
        register_nav_menu('menu-principal',__( 'Menu principal' ));
    }
   
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
    
    // Déclarer un bloc Gutenberg avec ACF
    add_action( 'acf/init', 'register_acf_block_types' );
    function register_acf_block_types() {

        acf_register_block_type( array(
            'name'              => 'Masonry',
            'title'             => 'Masonry',
            'description'       => "3 photos + présentation",
            'render_template'   => 'blocks/masonry.php',
            'category'          => 'formatting', 
            'icon'              => 'layout', 
            'keywords'          => array( 'plugin', 'extension', 'add-on' )
        ) );

        acf_register_block_type( array(
            'name'              => 'Image Gauche + Texte',
            'title'             => 'image_left_text',
            'description'       => "Image à gauche, texte à droite",
            'render_template'   => 'blocks/image_left_text.php',
            'category'          => 'formatting', 
            'icon'              => 'align-left', 
            'keywords'          => array( 'plugin', 'extension', 'add-on' )
        ) );

        acf_register_block_type( array(
            'name'              => 'Image Droite + Texte',
            'title'             => 'Image Droite + Texte',
            'description'       => "Image à droite, texte à gauche",
            'render_template'   => 'blocks/image_right_text.php',
            'category'          => 'formatting', 
            'icon'              => 'align-right', 
            'keywords'          => array( 'plugin', 'extension', 'add-on' )
        ) );

        acf_register_block_type( array(
            'name'              => 'Collage Images Gauche, Texte Droite',
            'title'             => 'Collage Images Gauche, Texte Droite',
            'description'       => "Image avec ombre à gauche, texte à droite",
            'render_template'   => 'blocks/image-ombre-gauche-texte-droite.php',
            'category'          => 'formatting', 
            'icon'              => 'align-left', 
            'keywords'          => array( 'plugin', 'extension', 'add-on' )
        ) );
    }

    