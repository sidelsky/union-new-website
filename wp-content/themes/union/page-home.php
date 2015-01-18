<?php 
	/*
	Template Name: Home
	*/
	get_header();
	?>

	<?php 
		if(get_field('hero_type') == "slider") {
			get_template_part( 'template-parts/top-slider' ); //Top slider
		} elseif(get_field('hero_type') == "film") {
			get_template_part( 'template-parts/top-video-loop' ); //Top video loop
		} else {
			get_template_part( 'template-parts/seq-slider' ); //Seq slider
		}
	?>

	<!-- Seq slider -->
	<?php/* get_template_part( 'template-parts/seq-slider' ); */?>

	<!-- Top video loop -->
	<?php/* get_template_part( 'template-parts/top-video-loop' ); */?>

	<!-- Top slider -->
	<?php/* get_template_part( 'template-parts/top-slider' ); */?>

	<!-- Main navigation -->
	<?php get_template_part( 'template-parts/main-navigation' ); ?>

	<!-- Video slider -->
	<?php get_template_part('template-parts/featured-projects'); ?>

	<!-- In production -->
	<?php get_template_part('template-parts/in-production'); ?>

	<!-- About us -->
	<?php get_template_part('template-parts/about-us'); ?>

	<!-- Showreel -->
	<?php get_template_part('template-parts/showreel'); ?>

	<!-- Bios -->
	<?php get_template_part('template-parts/bios'); ?>

	<!-- News -->
	<?php get_template_part('template-parts/news-press'); ?>

	<!-- Location -->
	<?php get_template_part('template-parts/location'); ?>

	<!-- Map -->
	<?php get_template_part('template-parts/map'); ?>

	<!-- Contact -->
	<?php get_template_part('template-parts/contact'); ?>

	<?php
	get_footer( 'footer.php' );
	?>
