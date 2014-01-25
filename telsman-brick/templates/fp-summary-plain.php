<?php 
    /* Template Name: Summary Plain */ 
    // get this page's content
    $title = get_the_title();
	$img = get_post_meta(get_the_ID(), 'bgimage', true);
	$bgimage = wp_get_attachment_image_src($img["id"], 'full');
	$subheading = get_post_meta(get_the_ID(), 'subheading', true);
    $summary = get_post_meta(get_the_ID(), 'summary', true);
    $list_title = get_post_meta(get_the_ID(), 'list-title', true);
    $items = get_post_meta(get_the_ID(), 'items', true);
	$image = get_post_meta(get_the_ID(), 'list-img', true);
    $list_img_data = get_post_meta(get_the_ID(), 'list-img', true);
    $list_img = false;
    if($list_img_data){
        $list_img = wp_get_attachment_image_src(
            $list_img_data['id'],
            'full'
        );
    }
?>
<div class="summary-spread-color" style="background-image:url(<?php echo $bgimage[0] ?>); background-position:center;" data-slide="2" data-stellar-background-ratio=".5">
<div class="bg-overlay">
<div class="triangle-down">
				<div class="slant-L"></div>
				<div class="slant-R"></div>
				<div class="slant-R more-R"></div>
				<div class="bump-up slant-L more-L"></div>
		</div>
 	<div class="row container">
		<div class="large-12 columns">
			<div class="row fp-summary">
				<div class="medium-12 columns text-left bg-fill" <?php echo $list_img ? "style=\"background-image: url(${list_img[0]}); background-repeat: repeat;\"" : "" ; ?>>
					<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
					<div class="summary-text-container">
					<h2 class="text-center">
						<?php echo $title; ?>
					</h2>
					<h3 class="summary-subhead ">
						<?php echo $subheading; ?>
					</h3>
					<div class="text-2-columns">
						<?php echo $summary; ?>
					</div>
					</div>
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

