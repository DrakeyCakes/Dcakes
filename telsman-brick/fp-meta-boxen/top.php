<?php 
    require_once("meta-box-class/my-meta-box-class.php");
    $top_meta =  new AT_Meta_Box(array(
        'id' => 'top-box-meta',  // unique name
        'title' => 'Top Box Content',
        'pages' => array('top'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(),
        'local_images' => false,
        'use_with_theme' => get_stylesheet_directory_uri() . '/fp-meta-boxen/meta-box-class'
    ));
    
    $top_meta->addText(
        'sub-head',
        array('name'=> 'Sub Head')
    );
    $top_meta->addText(
        'phone',
        array('name'=> 'Phone')
    );
    $top_meta->addText(
        'email',
        array('name'=> 'Email')
    );
    $top_meta->addImage(
        'topimage',
        array('name'=> 'Top Image')
    );
    $top_meta->addImage(
        'logo',
        array('name'=> 'Logo Image')
    );
	 $top_fields[] = $top_meta->addImage(
		'image',
		array('name'=> 'BG Image'),
		true
    );
	 $top_fields[] = $top_meta->addText(
        'imagetitle',
        array('name'=> 'Image Title'),
        true
    );
    
    $top_meta->addRepeaterBlock(
        'items',
        array(
            'inline' => true,
            'fields' => $top_fields,
            'name' => 'Items',
            'sortable' => true
        )
    );
    $top_meta->Finish()
?>