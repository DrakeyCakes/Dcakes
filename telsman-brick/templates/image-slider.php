<?php 
/*
    Template Name: Image Slider 
    Renders out a script tag with an array of image URLs
*/
?> 
<div class="row">
    <div class="large-12 columns">
        <h2 class="slider">
            <?php echo get_the_title(); ?>
        </h2>
        <ul class="example-orbit" data-orbit>
            <?php $saved_data = get_post_meta(get_the_ID(),'isl_re_',true);
                foreach ($saved_data as $arr) {
                $url = $arr['isl_image_field_id']['url'];
                ?>
                <li>
                    <img src="<?php echo $url ?>">
                </li>
            <?php } ?>
        </ul>
        <p>
            <?php echo get_the_content(); ?>
        </p>
    </div>
</div>
