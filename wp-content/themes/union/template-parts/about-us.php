<section class="snap" id="about">
	<div class="section-width">
		<div class="inner min-max-width"
				data-bottom-top="opacity:0; transform:translateY(-60px)"
				data-top-top="opacity:1; transform:translateY(0px)"
				data-top-bottom="opacity:0; transform:translateY(60px)"
				data-anchor-target="#about"
		>
			<h1 class="center black border-bottom"><?php the_field('about_title'); ?></h1>
			<h2 class="center black border-bottom"><?php the_field('about_sub_title'); ?></h2>
			
			<article class="center grey ">
				<?php the_field('about_content'); ?>
			</article>

		</div>
	</div>
</section>