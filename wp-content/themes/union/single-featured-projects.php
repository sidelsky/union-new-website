<?php
	$post = get_post($_POST['id']);
?>

<?php
$studio_details = get_field('studio_details');
?>

<div class="feautured-single-post single-post" id="post-<?php the_ID(); ?>">
	<div class="section-width snap">
		<div class="zinner inner-section-bigger post-container" id="single-featured-post-container">
			<?php while (have_posts()) : the_post(); ?>
				
				<article class="module-60-40"
					data-bottom-top="opacity:0; transform:translateY(-60px)"
					data-top-top="opacity:1; transform:translateY(0px)"
					data-top-bottom="opacity:0; transform:translateY(60px)"
				>
					<div class="width">
						<?php the_title('<h1>','</h1>');?>
					</div>
					<div class="col1">
						<?php the_content();?>
					</div>
					<div class="col2">
					<p><?php echo $studio_details; ?></p>
						
						<?php if( have_rows('meta') ): ?>
						
						<ul class="meta-details">
							<?php while( have_rows('meta') ): the_row(); 
								$meta = get_sub_field('meta_info');
							?>

							<li>
								<?php echo $meta; ?>
							</li>

							<?php endwhile; ?>
						</ul>
						<?php endif; ?>

					</div>
				</article>

				<div id="close-me" class="close-me">
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/close-icon.png" width="75" alt="close">
					</a>
				</div>

			<?php endwhile;?> 
		</div>
	</div>
</div>