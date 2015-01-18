<?php
/* Custom code goes below this line. */


// update_option('siteurl','http://staging.unionvfx.com/');
// update_option('home','http://staging.unionvfx.com/');

//Plugins included into theme folder
include_once('plugins/simple-section-navigation/simple_section_nav.php');
//Adds a new settings to Gravity Forms notifications allowing uploaded files to be attached to the notification and the notification format to be changed to text.
//include_once('plugins/RWNotificationExtras.php');
//define( 'ACF_LITE', false );


/** Tell WordPress to run starkers_setup() when the 'after_setup_theme' hook is run. */
add_action('after_setup_theme', 'myTheme');
if ( ! function_exists('myTheme')) :


// register three menus
	function register_menus() {
		register_nav_menus(
			array(
				'primary-menu' => __('Primary Menu'),
				'secondary-menu' => __('Secondary Menu'),
				'tertiary-menu' => __('Tertiary Menu'),
				//'quaternary-menu' => __('Quaternary Menu')
				)
			);
	}
	add_action('init', 'register_menus');

	//Add excerpt to pages
	add_post_type_support( 'page', 'excerpt' );


//Button shortcode
function sButton($atts, $content = null) {
		extract(shortcode_atts(array('link'=>'#', 'class'=>'', 'arrow_colour'=>''),$atts));
		return '<a class="button link-arrows '.$class.'" href="'.$link.'"><i class="fa fa-angle-right '.$arrow_colour.'">'.do_shortcode( $content ).'</i></a>';
	}
	add_shortcode('button', 'sButton');

 


//Add active current class on wp_get_archives used on archive and index pages side menu
function theme_get_archives_link ( $link_html ) {
    global $wp;
    static $current_url;
    if ( empty( $current_url ) ) {
        $current_url = add_query_arg( $_SERVER['QUERY_STRING'], '', home_url( $wp->request ) );
    }
    if ( stristr( $current_url, 'page' ) !== false ) {
			$current_url = substr($current_url, 0, strrpos($current_url, 'page'));
    }
    //if ( stristr( $link_html, $current_url ) !== false ) {
    $yearRefX = '/(19|20)\d{2}/';
    $currentYear = preg_match($yearRefX, $current_url,$currentMatch);
    $linkYear = preg_match($yearRefX, $link_html, $linkMatch);

/*print_r('oi');
   	print_r($linkYear);
   	print_r($linkMatch);
   	print_r($currentYear);
   	print_r($currentMatch);*/

    if($currentYear == 1 && $linkYear == 1){
    	// we have amatch in both strings
    	if($currentMatch[0] == $linkMatch[0]){
    		// the years match.. hopefully!
				$link_html = preg_replace( '/(<[^\s>]+)/', '\1 class="current"', $link_html, 1 );
    	}
    }
    return $link_html;
}
add_filter('get_archives_link', 'theme_get_archives_link');

// print_r($_SERVER['QUERY_STRING']);
// print_r($link_html);
// print_r($current_url);
 

	//Default HTML5 Form
	//add_theme_support( 'html5', array( 'search-form' ) );

//Sidebar
// if ( function_exists('register_sidebar') )
// register_sidebar(array('name'=>'Left side',
// 'before_widget' => '<li id="%1$s" class="widget %2$s">',
// 'after_widget' => '</li>',
// 'before_title' => '<h2 class="widgettitle">',
// 'after_title' => '</h2>',
// ));


//Gravity forms - JavaScript to footer


// This theme uses post thumbnails
// if (function_exists('add_theme_support')) {
// 	add_theme_support('post-thumbnails');
//    	//set_post_thumbnail_size(600, 600, true); //the_post_thumbnail('thumb-image-large');
// 	add_image_size('main-thumb', 600, 600, true); 
// 	//add_image_size('thumb-image-small', 140, 80, true);
// 	//add_image_size('thumb-image-large', 300, 170, true);
// 	//add_image_size('slider', 1920, 600, true);
// }


// add_filter( 'wp_get_attachment_image_attributes', 'wpse8170_add_lazyload_to_attachment_image', 10, 2 );
// function wpse8170_add_lazyload_to_attachment_image( $attr, $attachment ) {
//     $attr['data-original'] = $attr['src'];
//     $attr['src'] = 'grey.gif';
//     return $attr;
// }




//Changes the upload path and url for the File Upload field.
// add_filter("gform_upload_path", "change_upload_path", 10, 2);
// function change_upload_path($path_info, $form_id){
//    $path_info["path"] = "/home/public_html/yourdomainfolder/new/path/";
//    $path_info["url"] = "http://yourdomainhere.com/new/path/";
//    return $path_info;
// }
 



	/*-----------------------------------------------------------------------------------*/
/*  Custom taxonomy for Job locations
/*-----------------------------------------------------------------------------------*/
/*register_taxonomy('Locations',
  array ('locations', 'job-opportunities'),
  array(
    'hierarchical' => false,
    'label' => 'Locations',
    'rewrite' => false,
    'show_ui' => true,
    'query_var' => true,
    'show_admin_column' => true,
      //'rewrite' => array('slug' => ''),
    'singular_label' => 'locations')
);*/



/*register_taxonomy( "office-locations", 
	array ('office-locations', 'office-locations'),
	array(
		"hierarchical" => true,
		'show_admin_column' => true,
		"labels" => array('name'=>"Office locations",'add_new_item'=>"Add New Field"), 
		"singular_label" => __( "Field" ), 
		"rewrite" => array( 'slug' => 'fields', // This controls the base slug that will display before each term 
		'with_front' => false)
	));*/



//Is tree
function is_tree($pid)// $pid = The ID of the page we're looking for pages underneath
{
  global $post;// load details about this page
  $ancestors = get_post_ancestors($post->$pid);
  $root = count($ancestors) - 1;
  //$parent = $ancestors[$root];

  if(is_page() && (is_page($pid) || $post->post_parent == $pid || in_array($pid, $ancestors)))
  {
    return true;// we're at the page or at a sub page
  }
  else
  {
    return false;// we're elsewhere
  }
};

 //Remove p from excerpt
$myExcerpt = get_the_excerpt();
$tags = array("<p>", "</p>");
$myExcerpt = str_replace($tags, "", $myExcerpt);
echo $myExcerpt;


// This function allows short excerpts with paragraphs
function improved_trim_excerpt($text) {
	global $post;
	if ( '' == $text ) {
		$text = get_the_content('');
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]&gt;', $text);
		$text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
		$text = strip_tags($text, '<a> <p>');
		$excerpt_length = 55;
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words)> $excerpt_length) {
			array_pop($words);
			//array_push($words,'... <p class="readMore"><a href="'. get_permalink($post->ID) . '">' . 'Read more' . '</a></p>');	
			$text = implode(' ', $words);
		}
	}
	return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');

/* the_excerpt(); */


// This function allows short excerpts Manually conrolled
function excerptMyLength($num) {
	$limit = $num+1;
	$excerptMyLength = explode(' ', get_the_content(), $limit);
	array_pop($excerptMyLength);
	//$excerptMyLength = implode(" ",$excerptMyLength).'...<br><br><a href="'. get_permalink($post->ID) . '" class="btn readMore">' . 'Read more' . '</a>';
	$excerptMyLength = implode(" ",$excerptMyLength);
	$readMore = '...<br><br><a href="'. get_permalink($post->ID) . '" class="btn readMore">' . 'Read more' . '</a>';
	echo '<p>'. $excerptMyLength . '</p>';
	if(is_search()||is_home()){

	} else {
		echo $readMore;
	}
}

/* excerptMyLength('22'); */

endif; /* Custom code goes above this line. */




/*-----------------------------------------------------------------------------------*/
/*	Custom Login Logo Support 
/*-----------------------------------------------------------------------------------*/
function tz_custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image:url('.get_template_directory_uri().'/img/zteoco.png) !important; background-size: 20px 110px !important;
	padding-bottom:15px !important; background-size:320px 110px !important; background-position:5px 0px !important; }
	body.login { background-color:#202020 !important; }
	.login form { background-color:transparent !important; border: 0px solid #fff !important; 
		-webkit-box-shadow: none; !important
		box-shadow: none; !important}
		.login label { color:#fff !important; }
		.login #nav a, .login #backtoblog a {text-shadow: none !important; color:#fff !important;}
		h1:after {
			content: "Union - Login";
			color: white;
			text-transform: uppercase;
			font-size: 24px;
		}
		.login #login_error  {
			margin-top: 20px;
			text-align: center;
		}
		</style>';
	}
	add_action('login_head', 'tz_custom_login_logo');


/*-----------------------------------------------------------------------------------*/
/*	Obscure login screen error messages
/*-----------------------------------------------------------------------------------*/
function wpfme_login_obscure(){
	return '<strong>Sorry</strong>: You\'ve gone wrong somwhere!';
}
add_filter( 'login_errors', 'wpfme_login_obscure' );


//Admin menu css changes
function registerCustomAdminCss(){
	$src = "/wp-content/themes/teoco/css/admin-styles.css";
	$handle = "customAdminCss";
	wp_register_script($handle, $src);
	wp_enqueue_style($handle, $src, array(), false, false);
    }
    add_action('admin_head', 'registerCustomAdminCss');
?>