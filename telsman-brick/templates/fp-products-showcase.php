<?php 
    /* Template Name: Products Showcase */ 
    // get this page's content
    $title = get_the_title();
	$img = get_post_meta(get_the_ID(), 'bgimage', false);
	$bgimage = wp_get_attachment_image_src($img["id"], 'full');
    $products = get_post_meta(get_the_ID(), 'products', true);
	 
?>
<div class="products-spread-color" style="background-image:url(<?php echo $bgimage[0] ?>); background-position:center;" >
<div class="bg-overlay" >
 	<div class="row container">
		<div class="large-12 columns">
			<div class="row fp-products">
				<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
				<div class="large-12 columns text-center">
					<h2 class="">
						<?php echo $title; ?>
					</h2>
					<?php if($products) { ?>
					<div class="product-bg">
						<ul class="fp-product-list" data-orbit>
							<?php foreach ($products as $item) { ?>
								<li class="row">
									<div class="large-7 columns text-center showcase">
										<a href="<?php echo wp_get_attachment_url($item["image"]["id"]); ?>" rel="lightbox-products" title="<?php echo $item["title"]; ?>">
										<?php echo wp_get_attachment_image($item["image"]["id"], array(400,400)); ?></a>
									</div>
									<div class="large-5 columns text-left">
										
										<div class="description">
										<h4><?php echo $item["title"]; ?></h4>
											<p><?php echo $item["text"]; ?></p>
										</div>
									</div>
								</li>
							<?php } ?>
						</ul>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
    </div>
	
</div>
</div>
