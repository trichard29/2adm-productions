<?php

    function my_mce4_options($init) {
        $primary = str_replace("#", "", get_field('primary_color', 'colors'));
        $secondary = str_replace("#", "", get_field('secondary_color', 'colors'));
        $third = str_replace("#", "", get_field('third_color', 'colors'));
     
     $custom_colors = "'$primary', 'Couleur Primaire',
                       '$secondary', 'Couleur Secondaire',
                       '$third', 'Couleur Tertiaire'";
    

    // build colour grid default+custom colors
    $init['textcolor_map'] = '['.$custom_colors.']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 1;

    return $init;
    }



add_action( 'acf/input/admin_footer', 'wd_acf_color_palette' );
function wd_acf_color_palette() { ?>

<script type="text/javascript">
(function($) {
     acf.add_filter('color_picker_args', function( args, $field ){
          // add the hexadecimal codes here for the colors you want to appear as swatches
         
        args.palettes = ['#000000', '#ffffff', '<?= get_field('primary_color', 'colors'); ?>', '<?= get_field('secondary_color', 'colors'); ?>', '<?= get_field('third_color', 'colors'); ?>']
          // return colors
          return args;
     });
})(jQuery);
</script>

<?php }

/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

add_filter('tiny_mce_before_init', 'my_mce4_options');

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
            'menu_name' => 'Réalisations'
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
        acf_add_options_sub_page( array(
            'post_id'       => 'colors',
            'page_title' 	=> 'Couleurs du thème',
            'menu_title'	=> 'Couleurs',
            'parent_slug'	=> 'theme-general-settings',
        ) );
    }

    // Déclarer un bloc Gutenberg avec ACF
    add_action( 'acf/init', 'register_acf_block_types' );
    function register_acf_block_types() {

        acf_register_block_type( array(
            'name'              => 'Bloc Two Columns Full',
            'title'             => 'Bloc Two Columns Full',
            'description'       => "Bloc full width deux colonnes image et texte (choix position)",
            'render_template'   => 'blocks/two-columns-full.php',
            'category'          => 'formatting', 
            'icon'              => 'layout', 
            'keywords'          => array( 'plugin', 'extension', 'add-on' )
        ) );

        acf_register_block_type( array(
            'name'              => 'Bloc Two Columns',
            'title'             => 'Bloc Two Columns',
            'description'       => "Bloc deux colonnes image et texte",
            'render_template'   => 'blocks/two-columns.php',
            'category'          => 'formatting', 
            'icon'              => 'layout', 
            'keywords'          => array( 'plugin', 'extension', 'add-on' )
        ) );

        acf_register_block_type( array(
            'name'              => 'Bloc Savoir-Faire',
            'title'             => 'Bloc Savoir-Faire',
            'description'       => "Bloc titre et texte avec vignettes compétences (logo + texte)",
            'render_template'   => 'blocks/savoir-faire.php',
            'category'          => 'formatting', 
            'icon'              => 'layout', 
            'keywords'          => array( 'plugin', 'extension', 'add-on' )
        ) );

        acf_register_block_type( array(
            'name'              => 'Bloc Banner',
            'title'             => 'Bloc Banner',
            'description'       => "Bloc banniere titre et texte",
            'render_template'   => 'blocks/banner.php',
            'category'          => 'formatting', 
            'icon'              => 'layout', 
            'keywords'          => array( 'plugin', 'extension', 'add-on' )
        ) );

        acf_register_block_type( array(
            'name'              => 'Bloc Galerie Equipe',
            'title'             => 'Bloc Galerie Equipe',
            'description'       => "Bloc galerie photo equipe + nom + fonction",
            'render_template'   => 'blocks/galerie_equipe.php',
            'category'          => 'formatting', 
            'icon'              => 'layout', 
            'keywords'          => array( 'plugin', 'extension', 'add-on' )
        ) );

        acf_register_block_type( array(
            'name'              => 'Bloc Contact',
            'title'             => 'Bloc Contact',
            'description'       => "Bloc formulaire de contact + titre",
            'render_template'   => 'blocks/contact.php',
            'category'          => 'formatting', 
            'icon'              => 'layout', 
            'keywords'          => array( 'plugin', 'extension', 'add-on' )
        ) );

        acf_register_block_type( array(
            'name'              => 'Bloc Grille Infos Contact',
            'title'             => 'Bloc Grille Infos Contact',
            'description'       => "Bloc grille d'informations de contact + images",
            'render_template'   => 'blocks/contact-info-grid.php',
            'category'          => 'formatting', 
            'icon'              => 'layout', 
            'keywords'          => array( 'plugin', 'extension', 'add-on' )
        ) );

        acf_register_block_type( array(
            'name'              => 'Bloc Masonry Overlay',
            'title'             => 'Bloc Masonry Overlay',
            'description'       => "Bloc affichage d'images avec tri par catégorie",
            'render_template'   => 'blocks/masonry-overlay.php',
            'category'          => 'formatting', 
            'icon'              => 'layout', 
            'keywords'          => array( 'plugin', 'extension', 'add-on' )
        ) );

        acf_register_block_type( array(
            'name'              => 'Slider Corporate',
            'title'             => 'Slider Corporate',
            'description'       => "Page accueil slider format corporate",
            'render_template'   => 'blocks/slider-corporate.php',
            'category'          => 'formatting', 
            'icon'              => 'layout', 
            'keywords'          => array( 'plugin', 'extension', 'add-on' )
        ) );


    }

    