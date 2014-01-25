<?php 
    require_once("meta-box-class/my-meta-box-class.php");
    $owner_meta =  new AT_Meta_Box(array(
        'id' => 'owner-box-meta',  // unique name
        'title' => 'Owner Box Content',
        'pages' => array('owner'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(),
        'local_images' => false,
        'use_with_theme' => true
    ));
    $owner_meta->addImage(
        'bgimage',
        array('name'=> 'Bg Image')
    );
    $owner_meta->addTextarea(
        'content',
        array('name'=> 'Content')
    );
    $owner_meta->addImage(
        'image',
        array('name'=> 'Image')
    );
	$owner_meta->addText(
        'link',
        array('name'=> 'Link To Owner')
    );
    $owner_meta->addText(
        'caption',
        array('name'=> 'Caption')
    );
?>