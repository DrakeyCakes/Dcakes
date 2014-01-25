<?php 
    require_once("meta-box-class/my-meta-box-class.php");
    $btm_meta =  new AT_Meta_Box(array(
        'id' => 'bottom-box-meta',  // unique name
        'title' => 'Bottom Box Content',
        'pages' => array('bottom'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(),
        'local_images' => false,
        'use_with_theme' => true
    ));
    
    $btm_meta->addTextarea(
        'blurb',
        array('name'=> 'Blurb')
    );
?>