<?php 
    require_once("meta-box-class/my-meta-box-class.php");
    $prod_meta =  new AT_Meta_Box(array(
        'id' => 'products-box-meta',  // unique name
        'title' => 'Product Info',
        'pages' => array('products'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(),
        'local_images' => false,
        'use_with_theme' => get_stylesheet_directory_uri() . '/fp-meta-boxen/meta-box-class'
    ));
 	$prod_meta->addImage(
        'bgimage',
        array('name'=> 'Bg Image')
    );
    $prod_repeater_fields[] = $prod_meta->addImage(
        'image',
        array('name'=> 'Image'),
        true
    );
    $prod_repeater_fields[] = $prod_meta->addText(
        'title',
        array('name'=> 'Title'),
        true
    );
    $prod_repeater_fields[] = $prod_meta->addTextarea(
        'text',
        array('name'=> 'Text'),
        true
    );
    $prod_meta->addRepeaterBlock(
        'products',
        array(
            'inline' => true,
            'fields' => $prod_repeater_fields,
            'name' => 'Products',
            'sortable' => true
        )
    );
    $prod_meta->Finish()
    
?>