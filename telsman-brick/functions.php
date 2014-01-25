<?php

    /* Put our css on admin pages */
    function load_custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/pickles.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
    }
    add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );
    
    /* This is for finding our own page templates */
    function find_our_page_tempates() {
        return wp_get_theme()->get_page_templates();
    }
    /* Register our theme's menu location */
    function register_menus() {
        register_nav_menus(array("main-nav" => "Main Nav"));
        register_nav_menus(array("top-nav" => "Top Nav"));
    }
    add_action( 'init', 'register_menus' );


    add_filter( 'nav_menu_link_attributes', 'slug_anchors', 10, 3 );
    function slug_anchors( $atts, $item, $args ) {
        $atts['href'] =  '#' . $item->object . $item->object_id;
        return $atts;
    }


    function get_anchor($post){
        return $post->post_type . $post->ID;
    }


    /* 
        This is a custom walker used in header.php to play well with foundation 
        because we need to explicity set the dropdown class.
    */
    class Foundation_Submenu_Walker extends Walker_Nav_Menu {
        function start_lvl(&$output, $depth) {
            // indent source code
            $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' );
            // append output with this ul
            $output .= "\n" . $indent . '<ul class="dropdown">' . "\n";
        }
    }
    
    /* Register Custom types */
    add_action( 'init', 'create_post_types' );
    function create_post_types() {
        register_post_type('top',
            array(
                'labels' => array(
                    'name' => 'Tops',
                    'singular_name' => 'Top',
                ),
                'public' => true,
                'capability_type' => 'page',
                'hierarchical' => true,
                'supports' => array(
                    'page-attributes',
                    'title',
                )
            )
        );
        register_post_type('video',
            array(
                'labels' => array(
                    'name' => 'Videos',
                    'singular_name' => 'Video',
                ),
                'public' => true,
                'capability_type' => 'page',
                'hierarchical' => true,
                'supports' => array(
                    'page-attributes',
                    'title',
                )
            )
        );
        register_post_type('summary',
            array(
                'labels' => array(
                    'name' => 'Summaries',
                    'singular_name' => 'Summary',
                ),
                'public' => true,
                'capability_type' => 'page',
                'hierarchical' => true,
                'supports' => array(
                    'page-attributes',
                    'title',
                )
            )
        );
		register_post_type('skills',
            array(
                'labels' => array(
                    'name' => 'Skills',
                    'singular_name' => 'Skill',
                ),
                'public' => true,
                'capability_type' => 'page',
                'hierarchical' => true,
                'supports' => array(
                    'page-attributes',
                    'title',
                )
            )
        );
        register_post_type('products',
            array(
                'labels' => array(
                    'name' => 'Products',
                    'singular_name' => 'Product',
                ),
                'public' => true,
                'capability_type' => 'page',
                'hierarchical' => true,
                'supports' => array(
                    'page-attributes',
                    'title',
                )
            )
        );
		 register_post_type('testmon',
            array(
                'labels' => array(
                    'name' => 'Testimonials',
                    'singular_name' => 'Testimonial',
                ),
                'public' => true,
                'capability_type' => 'page',
                'hierarchical' => true,
                'supports' => array(
                    'page-attributes',
                    'title',
                )
            )
        );
        register_post_type('certs',
            array(
                'labels' => array(
                    'name' => 'Certs',
                    'singular_name' => 'Certification',
                ),
                'public' => true,
                'capability_type' => 'page',
                'hierarchical' => true,
                'supports' => array(
                    'page-attributes',
                    'title',
                )
            )
        );
        register_post_type('owner',
            array(
                'labels' => array(
                    'name' => 'Owners',
                    'singular_name' => 'Owner',
                ),
                'public' => true,
                'capability_type' => 'page',
                'hierarchical' => true,
                'supports' => array(
                    'page-attributes',
                    'title',
                )
            )
        );
        register_post_type('photos',
            array(
                'labels' => array(
                    'name' => 'Photos',
                    'singular_name' => 'Photo Set',
                ),
                'public' => true,
                'capability_type' => 'page',
                'hierarchical' => true,
                'supports' => array(
                    'page-attributes',
                    'title',
                )
            )
        );
        register_post_type('contact',
            array(
                'labels' => array(
                    'name' => 'Contact',
                    'singular_name' => 'Contact',
                ),
                'public' => true,
                'capability_type' => 'page',
                'hierarchical' => true,
                'supports' => array(
                    'page-attributes',
                    'title',
                )
            )
        );
        register_post_type('bottom',
            array(
                'labels' => array(
                    'name' => 'Bottom',
                    'singular_name' => 'Bottom',
                ),
                'public' => true,
                'capability_type' => 'page',
                'hierarchical' => true,
                'supports' => array(
                    'page-attributes',
                    'title',
                )
            )
        );
    }


    /* Allow assinging our custom types as children of pages */
    function custom_type_parent_page_attributes_meta_box($post) {
        $post_type_object = get_post_type_object($post->post_type);
        if ($post_type_object->hierarchical) {
            $pages = wp_dropdown_pages(array(
                'post_type' => 'page',
                'selected' => $post->post_parent,
                'name' => 'parent_id',
                'show_option_none' => __('(no parent)'),
                'sort_column'=> 'menu_order,post_title',
                'echo' => 0
            ));
            if ( ! empty($pages) ) {
                echo $pages;
            }
        }
    }

    /**/
    // add_action('admin_menu', function() { 
    //     remove_meta_box('pageparentdiv', 'topper', 'normal');
    // });
    add_action('add_meta_boxes', function() { 
        function add_box($name) {
            add_meta_box(
                $name . '-parent',
                'Parent Page',
                'custom_type_parent_page_attributes_meta_box',
                $name,
                'side',
                'low'
            );
        }
        add_box('top');
        add_box('video');
        add_box('summary');
		add_box('skills');
        add_box('products');
		add_box('testmon');
        add_box('certs');
        add_box('owner');
        add_box('photos');
        add_box('contact');
        add_box('bottom');
    });



    /* Custom meta boxes */
    if (is_admin()){
        require_once("fp-meta-boxen/boxen.php");
    }

?>
