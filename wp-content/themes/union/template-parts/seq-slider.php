<section class="snap" data-panel="first" id="intro">
	
	<div id="slides">

		<!-- Repeat section -->
		<?php if( have_rows('slider') ): ?>
			<ul class="slides-container">
				<?php while( have_rows('slider') ): the_row(); 
				// vars
				$slider_title = get_sub_field('slider_title');
				$slider_video = get_sub_field('slider_video');
				$slider_image = get_sub_field('slider_image');
				$button_link = get_sub_field('button_link');
				?>
				<li class="image-seq" 
data-0-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0000.jpg);"
data--20-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0001.jpg);"
data--40-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0002.jpg);"
data--60-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0003.jpg);"
data--80-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0004.jpg);"
data--100-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0005.jpg);"
data--120-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0006.jpg);"
data--140-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0007.jpg);"
data--160-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0008.jpg);"
data--180-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0009.jpg);"
data--200-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0010.jpg);"
data--220-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0011.jpg);"
data--240-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0012.jpg);"
data--260-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0013.jpg);"
data--280-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0014.jpg);"
data--300-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0015.jpg);"
data--320-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0016.jpg);"
data--340-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0017.jpg);"
data--360-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0018.jpg);"
data--380-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0019.jpg);"
data--400-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0020.jpg);"
data--420-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0021.jpg);"
data--440-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0022.jpg);"
data--460-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0023.jpg);"
data--480-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0024.jpg);"
data--500-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0025.jpg);"
data--520-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0026.jpg);"
data--540-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0027.jpg);"
data--560-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0028.jpg);"
data--580-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0029.jpg);"
data--600-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0030.jpg);"
data--620-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0031.jpg);"
data--640-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0032.jpg);"
data--660-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0033.jpg);"
data--680-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0034.jpg);"
data--700-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0035.jpg);"
data--720-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0036.jpg);"
data--740-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0037.jpg);"
data--760-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0038.jpg);"
data--780-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0038.jpg);"
data--800-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0039.jpg);"
data--820-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0040.jpg);"
data--840-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0041.jpg);"
data--860-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0042.jpg);"
data--880-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0043.jpg);"
data--900-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0044.jpg);"
data--920-top="background-image:!url(<?php bloginfo('template_directory'); ?>/img/seq/Incr0045.jpg);"
data-anchor-target="#top">

	<div class="inner section-width"
		data-0-start="opacity:1; transform:translateY(0px)"
		data-800-start="opacity:0; transform:translateY(200px);"
		data-anchor-target="#slides"
		>
		<div class="inner-content text-center">
			<img src="<?php bloginfo('template_directory'); ?>/img/union-logo.png" class="union-logo" alt="Union">
		</div>
	</div>

<div class="scroll center"
		data-0-start="opacity:1; transform:translateY(0px)"
		data-800-start="opacity:0; transform:translateY(150px);"
		data-anchor-target="#slides"
	>
	<h1 class="white"><?php echo $slider_title; ?></h1>

<div class="arrow animated bounce">
	<a href="#projects">
		<i class="flaticon-expand22"></i>
	</a>
</div>

</div>

<div class="image-cover"
	data-0-start="transform:translateY(0px)"
	data-800-start="transform:translateY(200px);"
	data-anchor-target="#slides"
	>&nbsp;</div>

			</li>
		<?php endwhile; ?>
	</ul>
<?php endif; ?>

</div>
</section>



<div class="hide hide-images">
	<div>
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0001.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0002.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0003.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0004.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0005.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0006.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0007.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0008.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0009.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0010.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0011.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0012.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0013.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0014.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0015.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0016.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0017.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0018.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0019.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0020.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0021.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0022.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0023.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0024.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0025.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0026.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0027.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0028.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0029.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0030.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0031.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0032.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0033.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0034.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0035.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0036.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0037.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0038.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0040.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0041.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0042.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0043.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0044.jpg" alt="">
		<img src="<?php bloginfo('template_directory'); ?>/img/seq/Incr0045.jpg" alt="">
	</div>
</div>