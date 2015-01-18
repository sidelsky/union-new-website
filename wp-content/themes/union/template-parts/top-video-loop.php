
<?php
$top_video_loop = get_field('top_video_loop');
$top_video_title = get_field('top_video_title');
?>

<section class="intro-vimeo-video" id="slides">

	<div class="inner section-width"
	data-bottom-top="opacity:0; transform:translateY(-200px)"
	data-top-top="opacity:1; transform:translateY(0px)"
	data-top-bottom="opacity:0; transform:translateY(200px)"
	data-anchor-target="#slides"
	>

	<div class="inner-content text-center">
		<img src="<?php bloginfo('template_directory'); ?>/img/union-logo.png" class="union-logo" alt="Union">
	</div>

</div>

<div class="scroll center"
data-bottom-top="opacity:0; transform:translateY(-150px)"
data-top-top="opacity:1; transform:translateY(0px)"
data-top-bottom="opacity:0; transform:translateY(150px)"
data-anchor-target="#slides"
>
<h1 class="white"><?php echo $top_video_title; ?></h1>

<div class="arrow animated bounce">
	<a href="#projects">
		<i class="flaticon-expand22"></i>
	</a>
</div>

</div>


<div id="slides"
data-bottom-top="transform:translateY(-200px)"
data-top-top=" transform:translateY(0px)"
data-top-bottom="transform:translateY(200px)"
data-anchor-target="#slides">
<div id="fullscreen_background_bullets">
	<div class="myloader"></div>
	<!-- CONTENT -->
	<ul class="fullscreen_background_list">
		<li>
			<div class="image-cover">&nbsp;</div>
			<img src="<?php bloginfo('template_directory'); ?>/img/empty.png" width="1" height="1" />
			<iframe src="http://player.vimeo.com/video/<?php echo $top_video_loop ?>?title=0&byline=0&portrait=0&autoplay=1&loop=1&setVolume=0" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</li>
	</ul>      
</div>
</div>
</section>