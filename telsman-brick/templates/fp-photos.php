<?php 
    /* Template Name: Photos */ 
    // get this page's content
    $title = get_the_title();
    $photos = get_post_meta(get_the_ID(), 'images', true);
?>
<div class="photos-spread-color">

 	<div class="row photos-row container">
		<div class="large-12 columns">
			<div class="row photos-row fp-photos">
				<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
				<div class="large-12 columns">
					<?php if($photos) { ?>
						<ul class="fp-photos-list" data-orbit>
							<?php foreach ($photos as $item) { ?>
								<li>
									<div class="orbit-caption">
										<?php echo $item["caption"]; ?>
									</div>
									<?php echo wp_get_attachment_image($item["image"]["id"], 'full'); ?>
								</li>
							<?php } ?>
						</ul>
					<?php } ?>
				</div>
			</div>
		</div>
    </div>
</div>
