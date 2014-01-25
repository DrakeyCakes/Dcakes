<?php 
    require_once("meta-box-class/my-meta-box-class.php");
    $img_meta =  new AT_Meta_Box(array(
        'id' => 'photos', // unique name
        'title' => 'Photos',
        'pages' => array('photos'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(),
        'local_images' => false,
        'use_with_theme' => get_stylesheet_directory_uri() . '/fp-meta-boxen/meta-box-class'
    ));
    // fields
    $img_fields[] = $img_meta->addImage('image', array('name'=> 'Image'), true);
    $img_fields[] = $img_meta->addText('caption', array('name'=> 'Caption'), true);
    $img_meta->addRepeaterBlock(
        'images',
        array(
            'inline' => true,
            'name' => 'Images',
            'fields' => $img_fields, 
            'sortable' => true
        )
    );
?>