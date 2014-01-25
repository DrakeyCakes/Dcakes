<?php 
    /* Template Name: Top */ 
    // get this page's content
    $title = get_the_title();
    $sub = get_post_meta(get_the_ID(), 'sub-head', true);
    $phone = get_post_meta(get_the_ID(), 'phone', true);
    $email = get_post_meta(get_the_ID(), 'email', true);
    $img = get_post_meta(get_the_ID(), 'image', true);
    $image = wp_get_attachment_image($img["id"], 'full');
    $logo_data = get_post_meta(get_the_ID(), 'logo', true);
    $logo = false;
    if($logo_data){
        $logo = wp_get_attachment_image(
            $logo_data['id'],
            'full'
        );
    }
?>
<div class="top-spread-color">
	 <div class="row container top-row">
		<div class="large-12 columns">
			<div class="row fp-top">
				<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
				<div class="medium-6 columns text-center">
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
								<?php echo $sub; ?>
							</div>
						</div>
					<?php } if ($phone || $email) { ?>
						<div class="row">
							<?php if ($phone) { ?>
							<div class="fp-top-phone large-12 columns">
								<?php echo $phone; ?>
							</div>
							<?php } if ($email) { ?>
							<div class="fp-top-email large-12 columns">
								<?php echo $email; ?>
							</div>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
				<div class="fp-top-image medium-6 columns">
					<?php echo $image; ?>
		    </div>
		</div>
	</div>
    </div>
</div>
