<?php 
    /* Template Name: Certs Icons */ 
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
<div class="certs-spread-color" style="background-image:url(<?php echo $bgimage[0] ?>); background-position:center;" data-slide="2" data-stellar-background-ratio="0.5">
<div class="bg-overlay">
<div class="triangle-down">
				<div class="slant-L"></div>
				<div class="slant-R"></div>
				<div class="slant-R more-R"></div>
				
				<div class="bump-up slant-L more-L"></div>
				</div>
	<div class="row container">
		<div class="large-12 columns">
			<div class="row fp-certs">
				<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
				<div class="large-12 columns">
					<h2 class="">
						<?php echo $title; ?>
					</h2>
					<?php if($certs) { ?>
					<div class="text-center">
						<ul class="small-block-grid-2 medium-block-grid-6 large-block-grid-6 ">
							<?php foreach ($certs as $item) { ?>
								<li>
									<?php if ($item["image"]) { ?>
									<div class="grow">
											<?php echo wp_get_attachment_image($item["image"]["id"], array(150,150)); ?>
											<div class="kadabra">
											<span class="fp-cert-label"><?php echo $item["label"] ?></span>
										</div>

										</div>
									<?php } if ($item["icon"]) { ?>
										<div class="certs-icon-bg">
										<span class="icon-<?php echo $item["icon"] ?>"></span>
										</div>
									<?php } ?>
									<br />
									</li>
							<?php } ?>
						</ul>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
    </div>
				<div class="triangle-up">
				<div class="slant-L"></div>
				<div class="slant-R"></div>
				<div class="slant-R more-R"></div>
				
				<div class="bump-up slant-L more-L"></div>
				</div>
	</div>
		
</div>
