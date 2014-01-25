<?php 
    require_once("meta-box-class/my-meta-box-class.php");
    $meta =  new AT_Meta_Box(array(
        'id' => 'skills-box-meta',  // unique name
        'title' => 'Skills Info',
        'pages' => array('skills'),
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

    $skill_fields[] = $meta->addImage(
        'image',
        array('name'=> 'Image'),
        true
    );
	 $skill_fields[] = $meta->addText(
        'skilltitle',
        array('name'=> 'Skill Title'),
        true
    );
    $skill_fields[] = $meta->addTextarea(
        'text',
        array('name'=> 'Text'),
        true
    );
	
    $meta->addRepeaterBlock(
        'items',
        array(
            'inline' => true,
            'fields' => $skill_fields,
            'name' => 'Items',
            'sortable' => true
        )
    );
    $meta->Finish()
    
?>