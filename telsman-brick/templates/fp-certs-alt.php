<?php 
    /* Template Name: Certs-Alt */ 
    // get this page's content
    $title = get_the_title();
	$img = get_post_meta(get_the_ID(), 'bgimage', true);
	$bgimage = wp_get_attachment_image_src($img["id"], 'full');
    $certs = get_post_meta(get_the_ID(), 'certs', true);
	$items = get_post_meta(get_the_ID(), 'items', true);
    $list_img_data = get_post_meta(get_the_ID(), 'list-img', true);
    $list_img = false;
    if($list_img_data){
        $list_img = wp_get_attachment_image_src(
            $list_img_data['id'],
            'full'
        );
    }
?>
<div class="certs-spread-color" style="background-image:url(<?php echo $bgimage[0] ?>); background-position:center;" data-slide="2" data-stellar-background-ratio=".5">
	<div class="row container">
		<div class="large-12 columns">
			<div class="row fp-certs">
			
				<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
				<div class="large-12 columns">
				<div class="skill-container">
					<h2 class="">
						<?php echo $title; ?>
					</h2>
					<?php if($certs) { ?>
						<ul class="small-block-grid-2 medium-block-grid-6 text-center">
							<?php foreach ($certs as $item) { ?>
								<li class="text-center">
									<?php if ($item["image"]) { ?>
										<?php echo wp_get_attachment_image($item["image"]["id"], array(110,110)); ?>
									<?php } ?>
									<br />
									<span class="fp-cert-label"><?php echo $item["label"] ?></span>
								</li>
							<?php } ?>
						</ul>
					<?php } ?>
				</div>
				</div>
			</div>
		</div>
    </div>
</div>
