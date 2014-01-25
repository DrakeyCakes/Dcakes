<?php 
    /* Template Name: Summary Image */ 
    // get this page's content
    $title = get_the_title();
	$img = get_post_meta(get_the_ID(), 'bgimage', true);
	$bgimage = wp_get_attachment_image_src($img["id"], 'full');
	$subheading = get_post_meta(get_the_ID(), 'subheading', true);
    $summary = get_post_meta(get_the_ID(), 'summary', true);
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
<div class="summary-spread-color" style="background-image:url(<?php echo $bgimage[0] ?>); background-position:center;" data-slide="2" data-stellar-background-ratio="0.5">
 	<div class="row container">
		<div class="large-12 columns">
			<div class="row fp-summary">
				<div class="medium-6 columns text-left">
					<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
					<div class="summary-text-container">
					<h2 class="">
						<?php echo $title; ?>
					</h2>
					<h3 class="summary-subhead">
						<?php echo $subheading; ?>
					</h3>
					<p>
						<?php echo $summary; ?>
					</p>
					</div>
				</div>
				<div class="fp-list-items medium-6 columns">
					<a class="nav-anchor" id="null"></a>
					<div class="factory-image" <?php echo $list_img ? "style=\"background-image: url(${list_img[0]}); background-repeat: no-repeat;\"" : "" ; ?>>	</div>				
					</div>
				</div>
			</div>
		</div>
    </div>

