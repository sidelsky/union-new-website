<section class="snap" id="bios">
	<div class="section-width vertical-align">
		<div class="inner">
			<?php
			$biography_title = get_field('biography_title');
			$biography_description = get_field('biography_description');
			?>
			<div id="the-bios">
				<h1 class="center black border-bottom"
				data-bottom-top="opacity:0; transform:translateY(-60px)"
				data-top-top="opacity:1; transform:translateY(0px)"
				data-top-bottom="opacity:0; transform:translateY(60px)"
				data-anchor-target="#the-bios"
				><?php echo $biography_title; ?></h1>
				<h2 class="center black border-bottom min-max-width"
				data-bottom-top="opacity:0; transform:translateY(-60px)"
				data-top-top="opacity:1; transform:translateY(0px)"
				data-top-bottom="opacity:0; transform:translateY(60px)"
				data-anchor-target="#the-bios"
				><?php echo $biography_description; ?></h2>
			</div>

			<div class="clear"></div>

			<article class="center grey section-width">
				<ul class="module-33 zsnap" id="bios-thumbs" >
					<?php $args = array(
						'post_type' => 'biographies',
						'posts_per_page' => -1,
						'orderby' => 'post_date',
						'order' => 'DEC'
						);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>

					<?php
						$sub_title = get_field('sub_title');
						$thumbnail = get_field('thumbnail');
					?>

					<li class="thumb-icon">
						<a class="biog-post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
							<img src="<?php echo $thumbnail ?>" alt="<?php echo $thumbnail['alt']; ?>" class="thumbnail">

							<h1 class="bio-title">
								<span><?php the_title(); ?></span><br>
								<?php echo $sub_title; ?>
							</h1>

						</a>
					</li>
				<?php endwhile; wp_reset_query(); ?>
			</ul>
		</article>

	</div>
</div>
</section>


<!-- Load ajax content here -->
<section id="bios-project-data-container">
</section>

