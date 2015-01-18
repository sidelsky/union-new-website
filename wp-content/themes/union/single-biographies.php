<?php
	$post = get_post($_POST['id']);
?>

<div class="biog-single-post single-post snap section-width" id="post-<?php the_ID(); ?>">
	<div id="the-bios-text"
			data-bottom-top="opacity:0; transform:translateY(-60px)"
			data-top-top="opacity:1; transform:translateY(0px)"
			data-top-bottom="opacity:0; transform:translateY(60px)"
			data-anchor-target="#the-bios-text"
		>
		<div class="zinner inner-section-bigger post-container" id="biog-post-container">
			<?php while (have_posts()) : the_post(); ?>

				<?php
					$blockquote = get_field('blockquote');
				?>
				
				<article class="module-40-60">
					<?php the_title('<h1 class="title">','</h1>');?>
					<div class="col1">
					<blockquote>
						<?php echo $blockquote; ?>
					</blockquote>
					</div>
					<div class="col2">
						<?php the_content();?>
					</div>
				</article>

				<div id="close-me-biog" class="close-me">
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/close-icon.png" width="75" alt="close">
					</a>
				</div>

			<?php endwhile;?> 
		</div>
	</div>
</div>