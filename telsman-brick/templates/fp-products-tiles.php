<?php 
    /* Template Name: Products Tiles */ 
    // get this page's content
    $title = get_the_title();
	$img = get_post_meta(get_the_ID(), 'bgimage', true);
	$bgimage = wp_get_attachment_image_src($img["id"], 'full');
    $products = get_post_meta(get_the_ID(), 'products', true);
?>
<div class="products-spread-color" style="background-image:url(<?php echo $bgimage[0] ?>); background-position:center;" data-slide="2" data-stellar-background-ratio="0.5">
 	<div class="row container">
		<div class="large-12 columns">
			<div class="row fp-products">
				<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
				<div class="large-12 columns text-center">
					<h2 class="">
						<?php echo $title; ?>
					</h2>
					<div class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
						<div id="te-container">
							<?php foreach ($products as $item) { ?>
								<div id="cap-3" class="cap">
										<?php echo wp_get_attachment_image($item["image"]["id"], array(200,200)); ?>
									<a href="<?php echo wp_get_attachment_url($item["image"]["id"]); ?>" rel="lightbox-products" title="<?php echo $item["title"]; ?>" >
											<span class="caption scale-caption">
												<h3><?php echo $item["title"]; ?></h3>
													<h4><?php echo $item["text"]; ?></h4>
											</span>
											</a>
									</div>
								<?php } ?>
								</div>
								</div>
				</div>
			</div>
		</div>
    </div>
</div>
