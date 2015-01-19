<section class="dark-green-bg" id="projects">
	<div class="section-width snap">
		<div class="inner-top min-max-width"
		data-bottom-top="opacity:0; transform:translateY(-60px)"
		data-top-top="opacity:1; transform:translateY(0px)"
		data-top-bottom="opacity:0; transform:translateY(60px)"
		data-anchor-target="#projects"
		>
		<h1 class="center white border-bottom"><?php the_field('featured_title'); ?></h1>
		<h2 class="center light-green"><?php the_field('featured_content'); ?></h2>
		<!---
			<h3 class="center">
				<a href="#gallery">Projects<br><i class="flaticon-expand22"></i></a>
			</h3>
		-->

		<div class="toggle-wrapper" id="toggleMe">
			<ul class="toggle">
				<li id="featured-projects-toggle" class="active">
						<a href="#gallery-production">Featured projects</a>
				</li>
				<li id="in-production-toggle">
					<a href="#gallery-production">in production</a>
				</li>
			</ul>

			<div id="gallery-production">&nbsp;</div>

		</div>


	</div>
</div>
</section>

<section class="gallery snap white-bg" id="gallery">
	<div class="featured-projects">
		<?php $args = array(
				'post_type' => 'featured-projects',
				'posts_per_page' => -1,
				'orderby' => 'post_date',
				'order' => 'DEC'
				);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			?>

			  <div class="single-slide">

			  	<?php
						$studio_details = get_field('studio_details');
						$video_cover_jacket = get_field('cover_jacket');
						$vimeo_video_id = get_field('vimeo_video');
						$count++;
					?>

			  	<div id="title-wrapper_<?php echo $count; ?>" class="infoBlock infoBlockLeftBlack" 
						data-bottom-top="opacity:0; transform:translateY(-60px)"
						data-top-top="opacity:1; transform:translateY(0px)"
						data-top-bottom="opacity:0; transform:translateY(60px)"
						data-anchor-target="#gallery"
					>
					
					<a class="featured-post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
						<!-- <i class="fa fa-info info"></i> -->
						<span class="info">details</span>
					</a>
					
					<div class="inner">
						<h2 class="white"><?php the_title(); ?></h2>
						<i id="play-icon_<?php echo $count; ?>" class="flaticon flaticon-next15 play-icon white"></i>
						<p class="white"><?php echo $studio_details; ?></p>
					</div>

				</div>

			  <div class="image-slide">
					<div class="videosz">
						<div class='color-cover color-cover_<?php echo $count; ?>'>&nbsp;</div>
						<img src="<?php echo $video_cover_jacket; ?>" alt="<?php echo $video_cover_jacket['alt']; ?>" class="poster-image" id='play-cover_<?php echo $count; ?>'>
						<?php echo "<iframe id='video_$count' src='http://player.vimeo.com/video/$vimeo_video_id?api=1&player_id=video_$count&color=8f9d8d&autopause=1' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>" ?>
					</div>
				</div>

				<script>
					$(document).ready(function($) {
						var iframe = $('#video_<?php echo $count; ?>')[0],
								player = $f(iframe),
								status = $('.status_<?php echo $count; ?>'),

								title_wrapper = $('#title-wrapper_<?php echo $count; ?>'),
								cover = $('#play-cover_<?php echo $count; ?>'),
								color_cover = $('.color-cover_<?php echo $count; ?>'), 
								play_icon = $('#play-icon_<?php echo $count; ?>');
								
								$('.videosz iframe').hide();

						// When the player is ready, add listeners for pause, finish, and playProgress
						player.addEvent('ready', function() {
							status.text('ready');			    
							player.addEvent('pause', onPause);
							player.addEvent('finish', onFinish);
							player.addEvent('playProgress', onPlayProgress);
						});

						play_icon.bind("click", function() {
							player.api("play");
							cover.fadeOut(550);
							color_cover.fadeOut(550);
							title_wrapper.fadeOut(750);
							$('.slick-dots').fadeOut(550);
							//play_icon.fadeOut(1750);

							$('.videosz iframe').show();

						});

						function onPause(id) {
							status.text('paused');
							cover.fadeIn(550);
							color_cover.fadeIn(550);
							title_wrapper.fadeIn(750);
							$('.slick-dots').fadeIn(750);
							$('.videosz iframe').hide();
						//play_icon.fadeIn(750);
					}

					function onFinish(id) {
						status.text('finished');
						cover.fadeIn(550);
						color_cover.fadeIn(550);
						title_wrapper.fadeIn(750);
						$('.slick-dots').fadeIn(750);
						$('.videosz iframe').hide();
						//play_icon.fadeIn(650);
					}

					function onPlayProgress(data, id) {
						status.text(data.seconds + 's played');
					}


						$(".slick-next").attr("id","slick-next");
						$(".slick-prev").attr("id","slick-prev");


					//document.getElementById("slick-next").addEventListener("click", function(){
						$("#slick-next").click(function(){
					    player.api("pause");
						});

						$("#slick-prev").click(function(){
					    player.api("pause");
						});


				});
			</script>

		  </div>

		<?php endwhile; wp_reset_query(); ?>
	</div>
</section>



<!-- Load ajax content here -->
<section id="feaurted-project-data-container" class="lighter-green-bg">

</section>


