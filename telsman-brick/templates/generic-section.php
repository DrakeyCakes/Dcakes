<?php
/* Template Name: Generic Section */
?>
<div class="row">
    <a id="<?php echo get_anchor($post); ?>"></a>
    <div class="large-12 columns">
        <h2 class="generic-section">
            <?php echo get_the_title(); ?>
        </h2>
        <p>
            <?php echo get_the_content(); ?>
        </p>
    </div>
</div>