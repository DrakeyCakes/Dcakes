<?php 
    require_once("meta-box-class/my-meta-box-class.php");
    $cert_meta =  new AT_Meta_Box(array(
        'id' => 'certs-box-meta',  // unique name
        'title' => 'Cert Info',
        'pages' => array('certs'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(),
        'local_images' => false,
        'use_with_theme' => get_stylesheet_directory_uri() . '/fp-meta-boxen/meta-box-class'
    ));
	$cert_meta->addImage(
        'bgimage',
        array('name'=> 'Bg Image')
    );
    $cert_repeater_fields[] = $cert_meta->addImage(
        'image',
        array('name'=> 'Image'),
        true
    );
    $cert_repeater_fields[] = $cert_meta->addText(
        'icon',
        array('name'=> 'Icon'),
        true
    );
    $cert_repeater_fields[] = $cert_meta->addText(
        'label',
        array('name'=> 'Label'),
        true
    );
    $cert_meta->addRepeaterBlock(
        'certs',
        array(
            'inline' => true,
            'fields' => $cert_repeater_fields,
            'name' => 'Certs',
            'sortable' => true
        )
    );
    $cert_meta->Finish()
    
?>