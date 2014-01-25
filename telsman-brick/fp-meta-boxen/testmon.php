<?php 
    require_once("meta-box-class/my-meta-box-class.php");
    $testmon_meta =  new AT_Meta_Box(array(
        'id' => 'testmon-box-meta',  // unique name
        'title' => 'Tesitmonials',
        'pages' => array('testmon'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(),
        'local_images' => false,
        'use_with_theme' => get_stylesheet_directory_uri() . '/fp-meta-boxen/meta-box-class'
    ));
	$testmon_meta->addImage(
        'bgimage',
        array('name'=> 'Bg Image')
    );
    $testmon_repeater_fields[] = $testmon_meta->addTextArea(
        'comment',
        array('name'=> 'Testimonial'),
        true
    );
    $testmon_repeater_fields[] = $testmon_meta->addText(
        'name',
        array('name'=> 'Name'),
        true
    );
	 $testmon_repeater_fields[] = $testmon_meta->addText(
        'personlink',
        array('name'=> 'Name Link'),
        true
    );
	 $testmon_repeater_fields[] = $testmon_meta->addText(
        'title',
        array('name'=> 'Title'),
        true
    );
	 $testmon_repeater_fields[] = $testmon_meta->addText(
        'company',
        array('name'=> 'Company'),
        true
    );
	 $testmon_repeater_fields[] = $testmon_meta->addText(
        'companylink',
        array('name'=> 'Company Link'),
        true
    );
    
    $testmon_meta->addRepeaterBlock(
        'testmon',
        array(
            'inline' => true,
            'fields' => $testmon_repeater_fields,
            'name' => 'Comment',
            'sortable' => true
        )
    );
    $testmon_meta->Finish()
    
?>