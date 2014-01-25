<?php 
    /* Template Name: Bottom */ 
    // get this page's content
    $title = get_the_title();
    $blurb = get_post_meta(get_the_ID(), 'blurb', true);
?>
<div class="bottom-spread-color">
<div class="triangle-down">
				<div class="slant-L"></div>
				<div class="slant-R"></div>
				<div class="slant-R more-R"></div>
				<div class="bump-up slant-L more-L"></div>
		</div>
	<div class="row container">
		<div class="large-12 columns">
			<div class="row fp-bottom">
				<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
				<div class="medium-9 columns">
				<div class="bottom-text-container">
					<h5>
						<?php echo $title; ?>
					</h5>
					<p>
						<?php echo $blurb; ?>
					</p>
					</div>
				</div>
				<div class="fp-bottom-image medium-3 columns text-center">
					<a href="http://www.efficiencyexchange.com/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/charge_square_small.png" alt="EEx" /></a>
				</div>
			</div>
		</div>
    </div>
</div>
