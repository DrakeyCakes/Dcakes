<?php 
    /* Template Name: Owner */ 
    // get this page's content
    $title = get_the_title();
	$img = get_post_meta(get_the_ID(), 'bgimage', false);
	$bgimage = wp_get_attachment_image_src($img["id"], 'full');
    $content = get_post_meta(get_the_ID(), 'content', true);
    $caption = get_post_meta(get_the_ID(), 'caption', true);
	$link = get_post_meta(get_the_ID(), 'link', true);
    $img_meta = get_post_meta(get_the_ID(), 'image', true);
    if ($img_meta) {
        $image = wp_get_attachment_image(
            $img_meta["id"],
            array(300, 300)
        );
    } else {
        $image = '';
    }
?>
<div class="owner-spread-color" style="background-image:url(<?php echo $bgimage[0] ?>); background-position:center;" data-slide="2" data-stellar-background-ratio="0.5">
 	<div class="row container">
		<div class="large-12 columns">
			<div class="row fp-owner">
				<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
				<div class="fp-owner-image medium-5 columns text-center medium-push-7">
					<a href="<?php echo $link; ?>" target="_blank"><?php echo $image; ?>
					<p class="fp-owner-caption"><?php echo $caption; ?></p></a>
				</div>
				<div class="medium-7 medium-pull-5 columns">
				   <div class="owner-textbox">
					   <h2 class="">
							<?php echo $title; ?>
						</h2>
						<p>
							<?php echo $content; ?>
						</p>
					</div>
			</div>
		</div>
		</div>
    </div>
</div>
