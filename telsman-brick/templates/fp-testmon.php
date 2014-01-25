<?php 
    /* Template Name: Testimonials */ 
    // get this page's content
    $title = get_the_title();
	$img = get_post_meta(get_the_ID(), 'bgimage', true);
	$bgimage = wp_get_attachment_image_src($img["id"], 'full');
    $testmon = get_post_meta(get_the_ID(), 'testmon', true);
	$items = get_post_meta(get_the_ID(), 'items', true);
       
?>

<div class="testmon-spread-color" style="background-image:url(<?php echo $bgimage[0] ?>); " data-slide="2" data-stellar-background-ratio="0.1">
<div class="bg-overlay">
		<div class="triangle-down">
				<div class="slant-L"></div>
				<div class="slant-R"></div>
				<div class="slant-R more-R"></div>
				<div class="bump-up slant-L more-L"></div>
		</div>
	<div class="row container">
		<div class="large-12 columns">
			<div class="row fp-testmon">
				<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
				<div class="large-12 columns">
					<h2 class="">
						<?php echo $title; ?>
					</h2>
						<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2 ">
							<?php foreach ($testmon as $item) { ?>
								<li>
								
									<div class="testmon-container">
									<span class="fp-testmon-label">
									<span class="lefter"><a href="<?php echo $item["personlink"]; ?>" target="_blank"><h3><?php echo $item["name"] ?></h3></a></br><h5><?php echo $item["title"] ?></h5></span>
												<span class="righter"><a href="<?php echo $item["companylink"]; ?>" target="_blank"><h4><?php echo $item["company"] ?></h4></a></span>
											</span>
											<blockquote>
											<p><?php echo $item["comment"]; ?></p>
											</blockquote>
										</div>
									<?php } ?>
									<br />
									</li>
						</ul>
				</div>
			</div>
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
