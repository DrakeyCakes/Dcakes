<?php 
    /* Template Name: Products */ 
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
					<?php if($products) { ?>
						<ul class="fp-product-list" data-orbit>
							<?php foreach ($products as $item) { ?>
								<li class="row">
									<div class="large-6 columns text-center">
										<?php echo wp_get_attachment_image($item["image"]["id"], array(400,400)); ?>
									</div>
									<div class="large-6 columns text-left">
										
										<div class="description">
										<h4><?php echo $item["title"]; ?></h4>
											<p><?php echo $item["text"]; ?></p>
										</div>
									</div>
								</li>
							<?php } ?>
						</ul>
					<?php } ?>
				</div>
			</div>
		</div>
    </div>
</div>
