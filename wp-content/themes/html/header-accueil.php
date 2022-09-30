<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <!-- title -->
        <title><?php wp_title(''); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-114x114.png">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootsnav.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-icons.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/theme-vendors.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/responsive.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style-options.php" />


        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
            <!-- start header -->
            <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav navbar-fixed-top header-dark background-transparent nav-box-width white-link navbar-expand-lg menu-center border-white-light border-bottom">
            <div class="container-fluid nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto col-lg-2 ps-0">
                        <a href="<?php bloginfo('template_directory'); ?>" title="Pofo" class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" data-at2x="<?php bloginfo('template_directory'); ?>/images/logo.png@2x.png" class="logo-dark" alt="Pofo"><img src="<?php bloginfo('template_directory'); ?>/images/logo-white.png" data-at2x="<?php bloginfo('template_directory'); ?>/images/logo-white@2x.png" alt="Pofo" class="logo-light default"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col accordion-menu px-0">
                        <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-center" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="animate__fadeIn" data-out="animate__fadeOut">
                            <?php $menu_items = wp_get_nav_menu_items('menu-principal'); 
                                foreach($menu_items as $item) : ?>
                                    <!-- start menu item -->
                                    <li class="megamenu-fw">
                                        <a href="<?= $item->url; ?>"><?= $item->title; ?></a>
                                    </li>   
                                    <!-- end menu item -->
                                <?php endforeach; ?>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-lg-2 pe-0 text-end d-none d-md-block">
                        <div class="header-social-icon d-none d-md-inline-block no-border-left no-padding-left no-margin-left">
                            <a href="<?php bloginfo('template_directory'); ?>/https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="<?php bloginfo('template_directory'); ?>/https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="<?php bloginfo('template_directory'); ?>/https://dribbble.com/" title="Dribbble" target="_blank"><i class="fab fa-dribbble"></i></a>                          
                        </div>
                    </div>
                </div>
            <!-- wp_nav_menu( array( 'theme_location' => 'menu-principal', 'container_class' => 'custom-menu-principal' ) ); -->
            </nav>
            <!-- end navigation --> 
        </header>
        <!-- end header -->