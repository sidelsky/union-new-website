<section class="snap zlighter-green-bg " id="showreel">
	<div class="inner">
		<div class="showreel videos">
			<?php/* $count = 0; */?>
			<?php
			$showreel_cover_image = get_field('showreel_cover_image');
			$showreel_title = get_field('showreel_title');
			$showreel_video = get_field('showreel_video');
			//$count++;
			?>
			<div class="title-wrapper" id="title-wrapper"
				data-bottom-top="opacity:0; transform:translateY(-100px)"
				data-center="opacity:1; transform:translateY(0px);"
				data-top-bottom="opacity:0; transform:translateY(100px)"
				>

				<div class="showreel-title-wrapper">
					<h1 class="white center border-bottom"><?php echo $showreel_title; ?></h1>
					<div class="white center play-icon" id="play-icon">
						<i class="flaticon-next15"></i>
					</div>
				</div>


			</div>	

			<img src="<?php echo $showreel_cover_image; ?>" class="poster-image" alt="" height='100%' width='100%' id='showreel_cover_image'  />
			<?php echo "<iframe id='showreel-video' src='http://player.vimeo.com/video/$showreel_video?api=1&player_id=showreel-video&color=8f9d8d&autopause=1' width='100%' height='400' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>" ?>

		</div>
	</div>
</section>

<script>
	$(document).ready(function($) {
		var iframe = $('#showreel-video')[0],
		player = $f(iframe),
		status = $('.status_<?php echo $count; ?>'),
		title_wrapper = $('#title-wrapper'),
		cover = $('#showreel_cover_image'),
		play_icon = $('#play-icon');

				// When the player is ready, add listeners for pause, finish, and playProgress
				player.addEvent('ready', function() {
					status.text('ready');			    
					player.addEvent('pause', onPause);
					player.addEvent('finish', onFinish);
					player.addEvent('playProgress', onPlayProgress);
				});

				play_icon.bind("click", function() {
					player.api("play");
					cover.fadeOut(650);
					play_icon.fadeOut(650);
					title_wrapper.fadeOut(950);
					console.log('clicked');
				});

				function onPause(id) {
					status.text('paused');
					cover.fadeIn(650);
					title_wrapper.fadeIn(950);
					play_icon.fadeIn(650);
				}

				function onFinish(id) {
					status.text('finished');
					cover.fadeIn(650);
					title_wrapper.fadeIn(950);
					play_icon.fadeIn(650);
				}

				function onPlayProgress(data, id) {
					status.text(data.seconds + 's played');
				}
			});
		</script>

