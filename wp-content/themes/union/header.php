<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="no-js ie ie6 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="no-js ie ie7 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!-- Mobile Specific Metas -->
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<title>
		<?php wp_title(); ?>
	</title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/union-o-sml.png">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

	<?php/*
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	*/?>

	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-2.6.2.min.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>

	<!--[if lt IE 9]>
	  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/skrollr.ie.js"></script>
	<![endif]-->

<!-- Google  -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.main.js"></script>

</head>

<body <?php body_class('snap'); ?> id="top">
<div class='preloader'>
	<div class="loading">
		<img src="http://union-new-website/wp-content/themes/union/img/union-logo.png" class="union-logo" alt="Union">
		<img src="<?php bloginfo('template_directory'); ?>/img/spinner.gif" alt="Loading" class="spinner">
		<p><strong>union</strong></p>
		<p>Loading<br>content</p>
	</div>
</div>
<!-- <div id="info">0</div> -->
<?/*
<div id="progress-bar"
  data-0="width:0%;"
  data-end="width:100%"
  ></div>
*/?>