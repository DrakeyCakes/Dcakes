<?php 
    require_once("meta-box-class/my-meta-box-class.php");
    $meta =  new AT_Meta_Box(array(
        'id' => 'summary-box-meta',  // unique name
        'title' => 'Summary Info',
        'pages' => array('summary'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(),
        'local_images' => false,
        'use_with_theme' => get_stylesheet_directory_uri() . '/fp-meta-boxen/meta-box-class'
    ));
	$meta->addImage(
        'bgimage',
        array('name'=> 'Bg Image')
    );
	 $meta->addText(
        'subheading',
        array('name'=> 'Sub-heading')
    );
    
    $meta->addTextarea(
        'summary',
        array('name'=> 'Summary')
    );
    $meta->addText(
        'list-title',
        array('name'=> 'List Title')
    );

    $meta->addImage(
        'list-img',
        array('name'=> 'List BG Image')
    );

    $repeater_fields[] = $meta->addImage(
        'image',
        array('name'=> 'Image'),
        true
    );
    $repeater_fields[] = $meta->addText(
        'icon',
        array('name'=> 'Icon'),
        true
    );
    $repeater_fields[] = $meta->addText(
        'text',
        array('name'=> 'Text'),
        true
    );
    $meta->addRepeaterBlock(
        'items',
        array(
            'inline' => true,
            'fields' => $repeater_fields,
            'name' => 'Items',
            'sortable' => true
        )
    );
    $meta->Finish()
    
?>