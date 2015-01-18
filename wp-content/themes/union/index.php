<?php get_header(); ?>

<section class="page-wrapper__wide sub-pages section grey">
	<div class="page-wrapper__wide__inner padding-tb">
		<h1>News</h1>
		<div class="left-col">
			<ul class="side-menu">
				<li class="all">
					<a href="news">All</a>
				</li>
				<?php $args = array(
					'type'            => 'yearly',
					'limit'           => '',
					'format'          => 'html', 
					'before'          => '',
					'after'           => '',
					'show_post_count' => false,
					'echo'            => 1,
					'order'           => 'DESC'
					); wp_get_archives( $args ); ?>
				</ul>
			</div>

			<div class="right-col">
				<ul class="post-list container news-media-events">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<li class="section news">
							<a href="<?php the_permalink(); ?>">
								
								<span class="the-time">
									<?php the_time('jS F Y') ?>
								</span>
								<?php the_title('<h2>','</h2>'); ?>

								<span class="visit">
									More >
								</span>

							</a>
						</li>

						<?php endwhile; ?>
						<!-- post navigation -->

						<footer class="pagenavi">
							<?php wp_pagenavi(); ?>
						</footer>

					<?php endif; ?>
				</ul>
			</div>
		</div>
	</section>

<?php get_footer(); ?>


