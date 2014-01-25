<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <title><?php
            global $page, $paged;
            wp_title( '|', true, 'right' );
            bloginfo( 'name' );
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
                echo " | $site_description";
            if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
        ?></title>

        <!-- Foundation CSS -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/foundation/css/foundation.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); ?>
        <?php wp_head(); ?>

        <!-- Foundation JS -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/foundation/js/vendor/custom.modernizr.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/foundation/js/vendor/jquery.js"></script>
        <script src="//use.edgefonts.net/open-sans;source-sans-pro.js"></script>
		 <!-- Slimbox JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/fancy/slimbox/js/slimbox2.js"></script>
		
		 <!-- Parallax JS -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/fancy/parallax/js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/fancy/parallax/js/waypoints.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/fancy/parallax/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/fancy/parallax/js/scripts.js"></script>
	 <!-- Full Image Slideshow -->
	 <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/fancy/topper/js/modernizr.custom.86080.js"></script>
	 <!-- Responsive Icon -->
	 <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/fancy/responseicons/js/modernizr.custom.js"></script>
	 <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/block/jquery.border.min.js"></script>
	  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/block/jquery.debouncedresize.js"></script>
	   <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/charts/raphael.2.1.0.min.js"></script>
		 <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/charts/justgage.1.0.1.min.js"></script>
	<!-- <script type="text/javascript" src="js/scripts.min.js"></script> -->
    </head>

    <body <?php body_class(); ?>>
        <!-- Everything gets wrapped in row -->
        <?php if(has_nav_menu( 'top-nav' )) { ?>
            <div class="row">
                <div class="large-12 columns">
                    <?php wp_nav_menu(
                        array( 
                            'theme_location' => 'main-nav',
                            'container' => false,
                            'menu_class' => 'inline-list right',
                        ) 
                    );?>
                </div>
            </div>
        <?php } ?>
        <header class="row header-row">
            <?php if(has_nav_menu( 'main-nav' )) { ?>
                <div class="fixed contain-to-grid">
                    <nav class="top-bar" data-topbar>
                        <section class="top-bar-section">
                            <?php function nav_dropdown_class($items){
                                $parents = array();
                                foreach ( $items as $item ) {
                                    if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
                                        $parents[] = $item->menu_item_parent;
                                    }
                                }
                                foreach ( $items as $item ) {
                                    if ( in_array( $item->ID, $parents ) ) {
                                        $item->classes[] = 'has-dropdown'; 
                                    }
                                }
                                return $items;
                            }
                            add_filter('wp_nav_menu_objects' , 'nav_dropdown_class' , 10 , 1);
                            wp_nav_menu(
                                array( 
                                    'theme_location' => 'main-nav',
                                    'container' => false,
                                    'menu_class' => '',
                                    'walker' => new Foundation_Submenu_Walker()
                                ) 
                            );?>
                        </section>
                    </nav>
                </div>
            <?php } ?>
        </header>
       
