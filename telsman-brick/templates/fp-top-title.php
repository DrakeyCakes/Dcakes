<?php 
    /* Template Name: Top-Title */ 
    // get this page's content
    $title = get_the_title();
    $sub = get_post_meta(get_the_ID(), 'sub-head', true);
	$img = get_post_meta(get_the_ID(), 'image', true);
	$phone = get_post_meta(get_the_ID(), 'phone', true);
	$email = get_post_meta(get_the_ID(), 'email', true);
	/*$image = wp_get_attachment_image_src($img["id"], 'full'); */
    $logo_data = get_post_meta(get_the_ID(), 'logo', true);
    $logo = false;
    if($logo_data){
        $logo = wp_get_attachment_image(
            $logo_data['id'],
            'full'
        );
    }
?>
<div class="top-spread-color" id="slide4" data-slide="2" data-stellar-background-ratio="0.5">
	 <div class="row container top-row">
		<div class="large-12 columns">
			<div class="row fp-top-img" >
				<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
				<div class="large-12 columns text-center">
					<?php if($logo) { ?>
						<div class="row">
							<div class="fp-top-logo large-12 columns">
								<?php echo $logo; ?>
							</div>
						</div>
					<?php } else { ?>
						<h1>
							<?php echo $title; ?>
						</h1>
					<?php } if($sub) { ?>
						<div class="row">
							<div class="fp-top-sub large-12 columns">
								<h2><?php echo $sub; ?></h2>
								<div class="top-contact">
								<p><?php echo $phone; ?></p>
								<p><?php echo $email; ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				
		</div>
	</div>
    </div>
</div>
