<section class="snap lighter-green-bg" id="news-press">
	<div class="section-width vertical-align">
		<div class="inner"
				data-bottom-top="opacity:0; transform:translateY(-60px)"
				data-top-top="opacity:1; transform:translateY(0px)"
				data-top-bottom="opacity:0; transform:translateY(60px)"
			>
			<h1 class="center black border-bottom">news &amp; press</h1>

			<div class="toggle-wrapper">
				<ul class="toggle">
					<li id="latest-news-toggle" class="active">
						<a href="javascript:void(0)">Latest news</a>
					</li>
					<li id="recent-press-toggle">
						<a href="javascript:void(0)">Recent press</a>
					</li>
				</ul>
			</div>

			<!-- Slick Latest news -->
			<div class="slick-slider" id="news">
			<?php $args = array(
						'post_type' => 'post',
						'posts_per_page' => -1,
						'orderby' => 'post_date',
						'order' => 'DEC',
						'cat' => 3
						);

					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
			  <div class="slick-item">

					<p class="date">
						<span><?php
							foreach((get_the_category()) as $category) {
							    echo $category->cat_name . ' ';}?></span><br>
						<?php the_time('F j, Y'); ?>
					</p>
					
			  	<h2>
			  		<?php the_title(); ?>
			  	</h2>

					<?php the_excerpt(); ?>
					<p class="readMore">
						<a href="<?php echo get_permalink( );?>" class="title-link">More +</a>
					</p>
				</div>
			  <?php endwhile; wp_reset_query();?>
			</div>



			<!-- Slick recent press -->
			<div class="slick-slider" id="press">
			<?php $args = array(
						'post_type' => 'post',
						'posts_per_page' => -1,
						'orderby' => 'post_date',
						'order' => 'DEC',
						'cat' => 4
						);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
			  <div class="slick-item">

					<p class="date">
						<span><?php
							foreach((get_the_category()) as $category) {
							    echo $category->cat_name . ' ';}?></span><br>
						

						<?php 
							$location = get_field('location');
							$press_date = get_field('press_date');

							if($location){
								echo $location;
								echo " / ";
							}	

							if($press_date){
								echo $press_date;
						} else {
							the_time('F j, Y');
						}?>
					 
					</p>
					
			  	<h2>
			  		<?php the_title(); ?>
			  	</h2>

					<?php the_excerpt(); ?>
					<p class="readMore">
						<a href="<?php echo get_permalink( );?>" class="title-link">More +</a>
					</p>
				</div>
			  <?php endwhile; wp_reset_query();?>
			</div>



		</div>
	</div>

	<!-- Load ajax content here -->
	<section id="new-press-project-data-container">
	</section>


</section>