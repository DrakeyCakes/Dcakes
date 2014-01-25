<?php 
    /* Template Name: Skills */ 
    // get this page's content
    $title = get_the_title();
	$img = get_post_meta(get_the_ID(), 'bgimage', true);
	$bgimage = wp_get_attachment_image_src($img["id"], 'full');
	$subheading = get_post_meta(get_the_ID(), 'subheading', true);
    $list_title = get_post_meta(get_the_ID(), 'list-title', true);
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
<div class="skills-spread-color" style="background-image:url(<?php echo $bgimage[0] ?>); background-position:center;" data-slide="2" data-stellar-background-ratio="0.5">
 	<div class="row container">
		<div class="large-12 columns">
			<div class="row fp-skills">
				<div class="medium-12 columns text-center">
					<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
					<div class="skills-text-container">
					<h2 class="">
						<?php echo $title; ?>
					</h2>
					
					</div>
				</div>
				<a class="nav-anchor" id="null"></a>
				<?php if($items) { ?>
				<?php foreach ($items as $item) { ?>
				<div class="fp-skills-items medium-12 columns">
					<div class="skill-img medium-4 columns">
									<?php if($item["image"]) { ?>
									<?php echo wp_get_attachment_image($item["image"]["id"], array(300,300)); ?>
									<?php } ?>
									</div>
									<div class="text medium-8 columns text-left">
										<h3><?php echo $item["skilltitle"]; ?></h3>
										<p><?php echo $item["text"]; ?></p>
									</div>
									</div>
							<?php } ?>
					<?php } ?>
					
				
			</div>
		</div>
    </div>
</div>
</div>
