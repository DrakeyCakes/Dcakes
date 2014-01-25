<?php 
    require_once("meta-box-class/my-meta-box-class.php");
    function add_page_template($meta) {
        $page_select_args = array(
            'page_template',
            find_our_page_tempates(),
            array(
                'name'=> 'Choose Template',
                'std'=> array('generic-section.php')
            )
        );
        call_user_func_array(
            array($meta, 'addSelect'),
            $page_select_args
        );    
    }
    /* Add our page template selection meta box */
    $template_meta = new AT_Meta_Box(array(
        'id' => 'page_template_meta',
        'title' => 'Template',
        'pages' => array(
            'top',
            'video',
            'summary',
			 'skills',
            'products',
			'testmon',
            'certs',
            'owner',
            'photos',
            'contact',
            'bottom',
        ),
        'context' => 'side',
        'priority' => 'low',
        'fields' => array(),
        'local_images' => false,
        'use_with_theme' => get_stylesheet_directory_uri() . '/fp-meta-boxen/meta-box-class'
    ));
    add_page_template($template_meta);
    /* add all boxen here */
    require_once('top.php');
    require_once('video.php');
    require_once('summary.php');
	require_once('skills.php');
    require_once('products.php');
	require_once('testmon.php');
    require_once('certs.php');
    require_once('owner.php');
    require_once('photos.php');
    require_once('contact.php');
    require_once('bottom.php');
?>