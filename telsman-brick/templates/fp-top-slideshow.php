<?php 
    /* Template Name: Top BG Slideshow */ 
    // get this page's content
    $title = get_the_title();
    $sub = get_post_meta(get_the_ID(), 'sub-head', true);
	$img = get_post_meta(get_the_ID(), 'topimage', true);
	$phone = get_post_meta(get_the_ID(), 'phone', true);
	$email = get_post_meta(get_the_ID(), 'email', true);
	 $items = get_post_meta(get_the_ID(), 'items', true);
    $list_img_data = get_post_meta(get_the_ID(), 'list-img', true);
    $list_img = false;
    if($list_img_data){
        $list_img = wp_get_attachment_image_src(
            $list_img_data['id'],
            'full'
        );
    }
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
<div class="top-spread-color">
<ul class="cb-slideshow">
	<?php if($items) { ?>
				<?php foreach ($items as $item) { ?>
            <li><span><div class="crop"><img src="<?php echo wp_get_attachment_url($item["image"]["id"]); ?>"</div></span>
									<div><h3><?php echo $item["imagetitle"]; ?></h3></div></li>
									<?php } ?>
					<?php } ?>
        </ul>
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
	<div class="triangle-up" style="margin-top: -42px; position: absolute;">
				<div class="slant-L"></div>
				<div class="slant-R"></div>
				<div class="slant-R more-R"></div>
				<div class="bump-up slant-L more-L"></div>
				</div>
</div>
