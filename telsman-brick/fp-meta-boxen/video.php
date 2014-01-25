<?php 
    require_once("meta-box-class/my-meta-box-class.php");
    $video_meta =  new AT_Meta_Box(array(
        'id' => 'video-box-meta',  // unique name
        'title' => 'Video Info',
        'pages' => array('video'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(),
        'local_images' => false,
        'use_with_theme' => true
    ));
    $video_meta->addImage(
        'bgimage',
        array('name'=> 'Bg Image')
    );
    $video_meta->addText(
        'youtube-id',
        array('name'=> 'YouTube ID')
    );
    $video_meta->addCheckbox(
        'autoplay',
        array('name'=> 'Autoplay')
    );
?>