<?php 
    /* Template Name: Video */ 
    // get this page's content
    $title = get_the_title();
	$img = get_post_meta(get_the_ID(), 'bgimage', false);
	$bgimage = wp_get_attachment_image_src($img["id"], 'full');
    $youtube_id = get_post_meta(get_the_ID(), 'youtube-id', true);
    $autoplay = get_post_meta(get_the_ID(), 'autoplay', true);
?>

<div class="video-spread-color" style="background-image:url(<?php echo $bgimage[0] ?>); background-position:center;" data-slide="2" data-stellar-background-ratio="0.5">
	 <div class="row container">
		<div class="large-12 columns">
		<div class="row fp-video">
			<a class="nav-anchor" id="<?php echo get_anchor($post); ?>"></a>
			<div class="large-12 columns text-center">
				<h2>
					<?php echo $title; ?>
				</h2>
				<div class="medium-9 columns medium-centered large-9 large-centered">
				<div class="video-container">
					<iframe 
						id="ytplayer"
						type="text/html"
						src="http://www.youtube.com/embed/<?php echo $youtube_id ?>?autoplay=<?php echo (empty($autoplay))? 0 : 1; ?>"
						frameborder="0">
					</iframe>
					</div>
					<br />
					<div class="watch-button">
					<a target="_blank" href="http://www.youtube.com/watch?v=<?php echo $youtube_id; ?>">Watch on YouTube</a>
					</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
