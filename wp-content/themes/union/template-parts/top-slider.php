<section class="snap" data-panel="first" id="slide-1">
	
	<div id="slides">
		<nav class="slides-navigation">
			<a href="#" class="next">Next</a>
			<a href="#" class="prev">Previous</a>
		</nav>

		<!-- Repeat section -->
		<?php if( have_rows('slider') ): ?>
			<ul class="slides-container">
				<?php while( have_rows('slider') ): the_row(); 
				// vars
					$slider_title = get_sub_field('slider_title');
					$slider_image = get_sub_field('slider_image');
				?>
				<li>

					<div class="inner section-width"
						data-bottom-top="opacity:0; transform:translateY(-60px)"
						data-top-top="opacity:1; transform:translateY(0px)"
						data-top-bottom="opacity:0; transform:translateY(60px)"
						data-anchor-target="#slides"
						>
						<div class="inner-content text-center">
							<img src="<?php bloginfo('template_directory'); ?>/img/union-logo.png" class="union-logo" alt="Union">
						</div>
					</div>

					<div class="scroll center"
						data-bottom-top="opacity:0; transform:translateY(-60px)"
						data-top-top="opacity:1; transform:translateY(0px)"
						data-top-bottom="opacity:0; transform:translateY(60px)"
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
						data-bottom-top="opacity:0; transform:translateY(-60px)"
						data-top-top="opacity:1; transform:translateY(0px)"
						data-top-bottom="opacity:0; transform:translateY(60px)"
					data-anchor-target="#slides"
					>&nbsp;</div>

				<img src="<?php echo $slider_image; ?>" alt="<?php echo $slider_image['alt']; ?>" class="slider-images"
						data-bottom-top="transform:translateY(-400px)"
						data-top-top=" transform:translateY(0px)"
						data-top-bottom="transform:translateY(400px)"
						data-anchor-target="#slides"
				>

			</li>
		<?php endwhile; ?>
	</ul>
<?php endif; ?>

</div>
</section>