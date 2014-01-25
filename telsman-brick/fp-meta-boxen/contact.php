<?php 
    require_once("meta-box-class/my-meta-box-class.php");
    $contact_meta =  new AT_Meta_Box(array(
        'id' => 'contact-box-meta',  // unique name
        'title' => 'Contact Box Content',
        'pages' => array('contact'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(),
        'local_images' => false,
        'use_with_theme' => true
    ));
    $contact_meta->addImage(
        'bgimage',
        array('name'=> 'Bg Image')
    );
    $contact_meta->addTextarea(
        'text',
        array('name'=> 'Text')
    );
	$contact_meta->addText(
        'phone',
        array('name'=> 'Phone')
    );
    $contact_meta->addText(
        'email',
        array('name'=> 'Email')
    );
	 $contact_meta->addText(
        'emailicon',
        array('name'=> 'Email Icon')
    );
	 $contact_meta->addText(
        'phoneicon',
        array('name'=> 'Phone Icon')
    );
?>