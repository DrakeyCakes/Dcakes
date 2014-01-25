<?php 
    /* Template Name: Contact */ 
    // get this page's content
    $title = get_the_title();
	$img = get_post_meta(get_the_ID(), 'bgimage', true);
	$bgimage = wp_get_attachment_image_src($img["id"], 'full');
    $text = get_post_meta(get_the_ID(), 'text', true);
?>
<div class="contact-spread-color"style="background-image:url(<?php echo $bgimage[0] ?>); background-position:center;" data-slide="2" data-stellar-background-ratio="0.5">
	<div class="row container">
		<div class="large-12 columns">
			<div class="row fp-contact">
				<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
				<div class="medium-6 columns">
					<div class="fp-contact-greeting">
					<h2 class="">
						<?php echo $title; ?>
					</h2>
					<p>
						<?php echo $text; ?>
					</p>
					</div>
				</div>
				<a class="nav-anchor" id="contactform"></a>
				<div class="fp-contact-form medium-6 columns">
				
					<?php echo do_shortcode("[contact_form]") ?>
				</div>
				<script>
				(function ($) {
					var f = $('.fp-contact form');
					f.attr('action', f.attr('action') + "#contactform");
				})(jQuery);
				</script>
			</div>
			</div>
		</div>
</div>
