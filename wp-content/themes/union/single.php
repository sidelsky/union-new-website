<?php
	$post = get_post($_POST['id']);
?>

<div class="news-single-post single-post snap" id="post-<?php the_ID(); ?>">

	<div class="section-width "
			data-bottom-top="opacity:0; transform:translateY(-60px)"
			data-top-top="opacity:1; transform:translateY(0px)"
			data-top-bottom="opacity:0; transform:translateY(60px)"
			>
		<div class="zinner inner-section-bigger min-max-width post-container" id="biog-post-container">
			<?php while (have_posts()) : the_post(); ?>
				

				<h1 class="black border-bottom center news-press-title">
					<?php the_title(); ?>
				</h1>

				<article class="grey center">
					
				<p class="date border-bottom">
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

					<?php the_content();?>
				</article>

				<div id="close-me-news" class="close-me">
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/close-icon.png" width="75" alt="close">
					</a>
				</div>

			<?php endwhile;?> 
		</div>
		</div>
</div>