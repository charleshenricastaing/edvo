<?php // Edvo Theme custom functions


// Default content width

if (!isset($content_width)) $content_width = 960;

// Theme support: feed links

add_theme_support('automatic-feed-links');

// Theme support: post thumbnails

add_theme_support('post-thumbnails');

// Add theme support: custom headers

add_theme_support('custom-header');

// Add theme support: custom backgrounds

add_theme_support('custom-background');

// Enable widgetized sidebars

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> __('Widgets Sidebar', 'h5'),
		'id' => 'widgets_sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>'
	));
}

// Parallax function

function img_parallax() { do_action('img_parallax'); }

// Adds parallax to all featured images, adds top margin if there is no featured image

add_action ('img_parallax','use_parallax');
function use_parallax() {
	if ( has_post_thumbnail() ) {
		$parallaxImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
	?>
		<div class="parallaxContainer" id="section_<?php echo the_ID(); ?>" style="
		background: url('<?php echo $parallaxImage[0]; ?>') fixed; 
		height:80vh; 
		background-repeat: no-repeat; 
		background-origin: content-box; 
		-webkit-background-origin: content-box; 
		-moz-background-origin: content-box; 
		-o-background-origin: content-box; 
		background-position-x: 50%; 
		-webkit-background-position-x: 50%; 
		-moz-background-position-x: 50%; 
		-o-background-position-x: 50%; 
		background-position-y: 50%; 
		-webkit-background-position-y: 50%; 
		-moz-background-position-y: 50%; 
		-o-background-position-y: 50%; 
		background-size:cover; 
		-webkit-background-size: cover; 
		-moz-background-size: cover; 
		-o-background-size: cover; 
		background-color: #fff;">
		</div>
	<?php
		}
	else {
		echo '<div class="top_margin">&nbsp;</div>';
		}
	}

// Add custom body class to the head if page has post thumbnail to customize entry title styling

add_filter( 'body_class', 'parallax_body_class' );
function parallax_body_class( $classes ) {
	if ( has_post_thumbnail() ) {
		$classes[] = 'parallaxContainer';
	}
	else {
		$classes[] = '';
	}
		return $classes;
}

// Add EDVO specific logo

function custom_login_logo() {
	echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/lib/img/logo-edvo.svg) no-repeat !important; background-size: contain !important; width: 100% !important; height: 24vh !important; }</style>';
}
add_action('login_head', 'custom_login_logo');

// Change login title

function change_wp_login_title() {
	return get_option('blogname');
}
add_filter('login_headertitle', 'change_wp_login_title');

// Enqueue javascript

if (!function_exists('h5_add_scripts')) {
	function h5_add_scripts() {
		if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
			wp_enqueue_script('comment-reply');
		}
	}
	add_action('wp_enqueue_scripts', 'h5_add_scripts');
}

// Recent Post Shortcode

function my_recent_posts_shortcode($atts){
	
	$q = new WP_Query(
	  array( 'orderby' => 'date', 'posts_per_page' => '4')
	);
   
   	$list = '<ul class="archiveContainer">';
   
   	while($q->have_posts()) : $q->the_post();

	// Post URL
	
	$postURL = urlencode(get_permalink());

	// Post Title

	$postTitle = str_replace( ' ', '%20', get_the_title());

	// Get Post Thumbnail

	$postThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

	// Facebook Share

	$facebookSHARE = 'https://www.facebook.com/sharer/sharer.php?u='.$postURL;
	
   
	$list .= '<li>' 
					. '<header>' 
						. '<div class="postImg">'
							. '<a href="' . get_permalink() . '" title="' . get_the_title() . '">' 
								. get_the_post_thumbnail() 
							. '</a>' 
						. '</div>'
					. '</header>'
					. '<section>'
						. '<h1>' 
							. '<a href="' . get_permalink() . '" title="' . get_the_title() . '">' 
								. get_the_title() 
							. '</a>' 
						. '</h1>'
						. '<span>'
							. '<p>' . get_the_excerpt() . '</p>'
						. '</span>' 
					. '</section>'
					. '<footer>'
						. '<div class="share">'
							. '<div class="social">'
								. '<a class="tooltip" data-tooltip="Partager sur Facebook" href="'.$facebookSHARE.'" target="_blank">' 
									. '<i class="edvo-facebook">' . '</i>'
								. '</a>' 
								. '<a class="tooltip" data-tooltip="Partager par email" href="mailto:?subject=Association Nationale EDVO&body=Cet article devrait vous interesser:'.$postURL.'">' 
									. '<i class="edvo-mail">' . '</i>'
								. '</a>' 
							. '</div>'
							. '<a class="goTo tooltip" data-tooltip="Lire l\'article" href="' . get_permalink() .'">'
								. '<i class="edvo-in-alt">' . '</i>'
							. '</a>' 
						. '</div>'
					. '</footer>'  
			. '</li>';
   
   endwhile;
   
   wp_reset_query();
   
   return $list . '</ul>';

}
   
add_shortcode('recent-posts', 'my_recent_posts_shortcode');


// Setup Excerpt Size

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Add two specific nav header/footer

function mytheme_setup() {
	register_nav_menus(
		array(
		'subheaderNav' => __( 'Small Header', 'bootpress' ),
		'headerNav' => __( 'Header', 'bootpress' ),
		'footerNav' => __( 'Footer', 'bootpress' )
		)
	);
}
add_action( 'after_setup_theme', 'mytheme_setup' );

// Register Custom Navigation Walker

require_once('wp_bootstrap_navwalker.php');
require_once('wp_menu_thumb.php');

// Remove URL comments form










?>

