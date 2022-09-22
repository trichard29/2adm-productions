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
                        <a href="<?php bloginfo('template_directory'); ?>/index.html" title="Pofo" class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" data-at2x="<?php bloginfo('template_directory'); ?>/images/logo.png@2x.png" class="logo-dark" alt="Pofo"><img src="<?php bloginfo('template_directory'); ?>/images/logo-white.png" data-at2x="<?php bloginfo('template_directory'); ?>/images/logo-white@2x.png" alt="Pofo" class="logo-light default"></a>
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
                                <!-- start menu item -->
                                <li class="dropdown megamenu-fw">
                                    <a href="<?php bloginfo('template_directory'); ?>/#">Home</a><i class="fas fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full">
                                        <ul>
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Classic Homepages</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-classic-corporate.html">Classic corporate</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-classic-digital-agency.html">Classic digital agency</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-classic-innovation-agency.html">Classic innovation agency</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-classic-web-agency.html">Classic web agency</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-classic-one-page.html">Classic one page</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-classic-start-up.html">Classic start-up</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-classic-interactive-agency.html">Classic interactive agency</a></li>
                                                    <li class="menu-new"><a href="<?php bloginfo('template_directory'); ?>/home-classic-business.html">Classic business</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column -->
                                            <!-- start sub menu column -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Creative Homepages</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-creative-studio.html">Creative studio</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-creative-business.html">Creative business</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-creative-simple-portfolio.html">Creative simple portfolio</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-creative-branding-agency.html">Creative branding agency</a></li>
                                                    <li class="menu-new"><a href="<?php bloginfo('template_directory'); ?>/home-creative-minimalist-portfolio.html">creative minimalist portfolio</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-creative-small-business.html">Creative small business</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-creative-designer.html">Creative designer</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-creative-agency.html">Creative agency</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Portfolio Homepages</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-portfolio-minimal.html">Portfolio minimal</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-portfolio-multiple-carousel.html">Portfolio multiple carousel</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-portfolio-centered-slides.html">Portfolio centered slides</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-portfolio-personal.html">Portfolio personal</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-portfolio-metro.html">Portfolio metro</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-portfolio-full-screen-vertical.html">Portfolio full screen – vertical</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-portfolio-photographer.html">Portfolio photographer</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-portfolio-parallax.html">Portfolio parallax</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Blog Homepages</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-blog-grid.html">Blog grid</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-blog-masonry.html">Blog masonry</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-blog-clean.html">Blog clean</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/home-blog-personal.html">Blog personal</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                        </ul>
                                        <!-- end sub menu -->
                                    </div>
                                </li>
                                <!-- end menu item -->
                                <li class="dropdown simple-dropdown"><a href="<?php bloginfo('template_directory'); ?>/#">Pages</a><i class="fas fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">About <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/about-us-simple.html">About us simple</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/about-us-classic.html">About us classic</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/about-us-modern.html">About us modern</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/about-me.html">About me</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Services <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/services-simple.html">Services simple</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/services-classic.html">Services classic</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/services-modern.html">Services modern</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Contact <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/contact-us-simple.html">Contact simple</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/contact-us-classic.html">Contact classic</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/contact-us-classic-02.html">Contact classic – style 02</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/contact-us-modern.html">Contact modern</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Team <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/team-simple.html">Team simple</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/team-classic.html">Team classic</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Additional Pages <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/our-clients.html">Our clients</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/404.html">Error 404</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/coming-soon.html">Coming soon</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/coming-soon-02.html">Coming soon – style 02</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/faq.html">Faq</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/maintenance.html">Maintenance</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/search-result.html">Search result</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/pricing.html">Pricing</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown megamenu-fw">
                                    <a href="<?php bloginfo('template_directory'); ?>/#">Portfolio</a><i class="fas fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full">
                                        <ul>
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Grid - Full width Layouts</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-full-width-grid-overlay.html">Portfolio grid overlay</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-full-width-grid-with-icon.html">Portfolio grid with icon</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-full-width-grid-transform.html">Portfolio grid transform</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-full-width-grid-zooming.html">Portfolio grid zooming</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="dropdown-header">Masonry - Full width Layouts</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-full-width-masonry-overlay.html">Portfolio masonry overlay</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-full-width-masonry-with-icon.html">Portfolio masonry with icon</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="dropdown-header">Metro - Full width Layouts</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-full-width-metro-overlay.html">Portfolio metro overlay</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-full-width-metro-with-icon.html">Portfolio metro with icon</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-full-width-metro-transform.html">Portfolio metro transform</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-full-width-metro-zooming.html">Portfolio metro zooming</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="dropdown-header">Other - Full width Layouts</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-full-width-image-gallery.html">Portfolio image gallery</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-full-width-justified-gallery.html">Portfolio justified</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-full-width-carousel.html">Portfolio carousel</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-full-width-parallax.html">Portfolio parallax</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column -->
                                            <!-- start sub menu column -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Grid - Boxed Layouts</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-boxed-grid-overlay.html">Portfolio grid overlay</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-boxed-grid-with-icon.html">Portfolio grid with icon</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-boxed-grid-transform.html">Portfolio grid transform</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-boxed-grid-zooming.html">Portfolio grid zooming</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="dropdown-header">Masonry - Boxed Layouts</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-boxed-masonry-overlay.html">Portfolio masonry overlay</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-boxed-masonry-with-icon.html">Portfolio masonry with icon</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="dropdown-header">Metro - Boxed Layouts</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-boxed-metro-overlay.html">Portfolio metro overlay</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-boxed-metro-with-icon.html">Portfolio metro with icon</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-boxed-metro-transform.html">Portfolio metro transform</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-boxed-metro-zooming.html">Portfolio metro zooming</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="dropdown-header">Other - Boxed Layouts</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-boxed-image-gallery.html">Portfolio image gallery</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-boxed-justified-gallery.html">Portfolio justified</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-boxed-carousel.html">Portfolio carousel</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-boxed-parallax.html">Portfolio parallax</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->

                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Single Project Page</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/single-project-page-01.html">Single project page 01</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/single-project-page-02.html">Single project page 02</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/single-project-page-03.html">Single project page 03</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/single-project-page-04.html">Single project page 04</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/single-project-page-05.html">Single project page 05</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/single-project-page-06.html">Single project page 06</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/single-project-page-07.html">Single project page 07</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/single-project-page-08.html">Single project page 08</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Portfolio Columns</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-two-columns.html">Portfolio 2 columns</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-three-columns.html">Portfolio 3 columns</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-four-columns.html">Portfolio 4 columns</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-five-columns.html">Portfolio 5 columns</a></li>
                                                </ul>
                                            </li>
                                            <!-- end sub menu column  -->
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-12 col-lg-3 d-none d-lg-block">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li>
                                                        <a href="<?php bloginfo('template_directory'); ?>/home-creative-studio.html" class="menu-banner-image"><img src="<?php bloginfo('template_directory'); ?>/images/menu-banner-01.png" alt="portfolio"/></a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php bloginfo('template_directory'); ?>/home-creative-business.html" class="menu-banner-image"><img src="<?php bloginfo('template_directory'); ?>/images/menu-banner-02.png" alt="portfolio"/></a>
                                                    </li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                        </ul>
                                        <!-- end sub menu -->
                                    </div>
                                </li>
                                <li class="dropdown simple-dropdown"><a href="<?php bloginfo('template_directory'); ?>/#" title="Blog">Blog</a><i class="fas fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Blog Standard <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-standard-full-width.html">Blog standard – full width</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-standard-with-left-sidebar.html">Blog standard with left sidebar</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-standard-with-right-sidebar.html">Blog standard with right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Blog Classic <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-classic.html">Blog classic</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-classic-full-width.html">Blog classic – full width</a></li>

                                            </ul></li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Blog List <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-list.html">Blog list</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-list-full-width.html">Blog list – full width</a></li>
                                            </ul></li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Blog Grid <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-grid.html">Blog grid</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-grid-full-width.html">Blog grid – full width</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Blog Masonry <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-masonry.html">Blog masonry</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-masonry-full-width.html">Blog masonry – full width</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Blog Simple <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-simple.html">Blog simple</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-simple-full-width.html">Blog simple – full width</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Blog Clean <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-clean.html">Blog clean</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-clean-full-width.html">Blog clean – full width</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Blog Images <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-images.html">Blog images</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-images-full-width.html">Blog images – full width</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Blog Only Text <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-only-text.html">Blog only text</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-only-text-full-width.html">Blog only text – full width</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Post Layout <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-post-layout-01.html">Blog post layout 01</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-post-layout-02.html">Blog post layout 02</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-post-layout-03.html">Blog post layout 03</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-post-layout-04.html">Blog post layout 04</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-post-layout-05.html">Blog post layout 05</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="<?php bloginfo('template_directory'); ?>/#">Post Types <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-standard-post.html">Standard post</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-gallery-post.html">Gallery post</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-slider-post.html">Slider post</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-html5-video-post.html">HTML5 video post</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-youtube-video-post.html">Youtube video post</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-vimeo-video-post.html">Vimeo video post</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-audio-post.html">Audio post</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-blockquote-post.html">Blockquote post</a></li>
                                                <li><a href="<?php bloginfo('template_directory'); ?>/blog-full-width-post.html">Full width post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- end sub menu -->
                                </li>
                                <li class="dropdown megamenu-fw">
                                    <a href="<?php bloginfo('template_directory'); ?>/#">Elements</a><i class="fas fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full icon-list-menu">
                                        <ul>
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">General elements</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/accordions.html"><i class="ti-layout-accordion-separated"></i> Accordions</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/buttons.html"><i class="ti-mouse"></i> Buttons</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/team.html"><i class="ti-user"></i> Team</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/team-carousel.html"><i class="ti-layout-slider-alt"></i> Team carousel</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/clients.html"><i class="ti-id-badge"></i> Clients</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/client-carousel.html"><i class="ti-layout-slider"></i> Client carousel</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/subscribe.html"><i class="ti-bookmark"></i> Subscribe</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/call-to-action.html"><i class="ti-headphone-alt"></i> Call to action</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/tab.html"><i class="ti-layout-tab"></i> Tab</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/google-map.html"><i class="ti-location-pin"></i> Google map</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/text-slider.html"><i class="ti-layout-media-overlay"></i> Text slider</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/contact-form.html"><i class="ti-clipboard"></i> Contact form</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/image-gallery.html"><i class="ti-gallery"></i> Image gallery</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column -->
                                            <!-- start sub menu column -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Infographics / icons</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/progress-bar.html"><i class="icon-hourglass"></i> Progress bar</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/icon-with-text.html"><i class="ti-layout-media-left"></i> Icon with text</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/overline-icon-box.html"><i class="ti-layout-placeholder"></i> Overline icon box</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/custom-icon-with-text.html"><i class="ti-layout-cta-btn-left"></i> Custom icon with text</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/counters.html"><i class="ti-timer"></i> Counters</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/countdown.html"><i class="ti-alarm-clock"></i> Countdown</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/pie-charts.html"><i class="ti-pie-chart"></i> Pie charts</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/text-box.html"><i class="ti-layout-cta-left"></i> Text box</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/fancy-text-box.html"><i class="ti-layout-cta-center"></i> Fancy text box</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->

                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Interactive Elements</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/testimonials.html"><i class="ti-thought"></i> Testimonials</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/testimonials-carousel.html"><i class="ti-comments"></i> Testimonials carousel</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/video.html"><i class="ti-video-camera"></i> Video</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/interactive-banners.html"><i class="ti-image"></i> Interactive banners</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/services.html"><i class="ti-headphone-alt"></i> Services</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/portfolio-slider.html"><i class="ti-layout-slider-alt"></i> Portfolio slider</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/info-banner.html"><i class="ti-layout-slider"></i> Info banner</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/rotate-box.html"><i class="ti-layout-width-full"></i> Rotate box</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/process-step.html"><i class="ti-stats-up"></i> Process step</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/blog-posts.html"><i class="ti-comment-alt"></i> Blog posts</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/instagram.html"><i class="ti-instagram"></i> Instagram</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/parallax-scrolling.html"><i class="ti-exchange-vertical"></i> Parallax scrolling</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Text & containers</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/heading.html"><i class="ti-text"></i> Heading</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/dropcaps.html"><i class="ti-layout-accordion-list"></i> Dropcaps</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/columns.html"><i class="ti-layout-column3-alt"></i> Columns</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/blockquote.html"><i class="ti-quote-left"></i> Blockquote</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/highlights.html"><i class="ti-underline"></i> Highlights</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/message-box.html"><i class="ti-layout-media-right-alt"></i> Message box</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/social-icons.html"><i class="ti-signal"></i> Social icons</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/lists.html"><i class="ti-list"></i> Lists</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/seperators.html"><i class="ti-layout-line-solid"></i> Separators</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/pricing-table.html"><i class="ti-layout-grid2-thumb"></i> Pricing table</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                        </ul>
                                        <!-- end sub menu -->
                                    </div>
                                </li>
                                <li class="dropdown megamenu-fw">
                                    <a href="<?php bloginfo('template_directory'); ?>/#">Features</a><i class="fas fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full">
                                        <ul>
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Header Styles</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/transparent-header.html">Transparent header</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/white-header.html">White header</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/dark-header.html">Dark header</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/header-with-top-bar.html">Header with top bar</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/header-with-sticky-top-bar.html">Header with sticky top bar</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/header-with-push.html">Header with push</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/center-navigation.html">Center navigation</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/center-logo.html">Center logo</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/top-logo.html">Top logo</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/one-page-navigation.html">One page navigation</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/hamburger-menu.html">Hamburger menu</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/hamburger-menu-modern.html">Hamburger menu modern</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/hamburger-menu-half.html">Hamburger menu half</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/left-menu-classic.html">Left menu classic</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/left-menu-modern.html">Left menu modern</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column -->
                                            <!-- start sub menu column -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Footer</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/footer-standard.html">Footer standard</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/footer-standard-dark.html">Footer standard dark</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/footer-classic.html">Footer classic</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/footer-classic-dark.html">Footer classic dark</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/footer-clean.html">Footer clean</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/footer-clean-dark.html">Footer clean dark</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/footer-modern.html">Footer modern</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/footer-modern-dark.html">Footer modern dark</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/footer-center-logo.html">Footer center logo </a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/footer-center-logo-dark.html">Footer center logo dark</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/footer-strip.html">Footer strip</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/footer-strip-dark.html">Footer strip dark</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/footer-center-logo-02.html">Footer center logo 02</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/footer-center-logo-02-dark.html">Footer center logo 02 dark</a></li>
                                                    <li class="menu-new"><a href="<?php bloginfo('template_directory'); ?>/footer-clean-modern.html">footer clean modern</a></li>
                                                    <li class="menu-new"><a href="<?php bloginfo('template_directory'); ?>/footer-clean-modern-dark.html">footer clean modern dark</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->

                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Page Title</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/page-title-left-alignment.html">Left alignment</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/page-title-right-alignment.html">Right alignment</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/page-title-center-alignment.html">Center alignment</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/page-title-dark-style.html">Dark style</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/page-title-big-typography.html">Big typography</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/page-title-parallax-image-background.html">Parallax image background</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/page-title-background-breadcrumbs.html">Image after breadcrumbs</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/page-title-gallery-background.html">Gallery background</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/page-title-background-video.html">Background video</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/page-title-mini-version.html">Mini version</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-12 col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Gallery</li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/single-image-lightbox.html">Single image lightbox</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/lightbox-gallery.html">Lightbox gallery</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/zoom-gallery.html">Zoom gallery</a></li>
                                                    <li class="menu-new"><a href="<?php bloginfo('template_directory'); ?>/metro-gallery.html">metro gallery</a></li>
                                                    <li class="menu-new"><a href="<?php bloginfo('template_directory'); ?>/justified-gallery.html">justified gallery</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/popup-with-form.html">Popup with form</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/modal-popup.html">Modal popup</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/open-youtube-video.html">Open youtube video</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/open-vimeo-video.html">Open vimeo video</a></li>
                                                    <li><a href="<?php bloginfo('template_directory'); ?>/open-google-map.html">Open google map</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                        </ul>
                                        <!-- end sub menu -->
                                    </div>
                                </li>
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