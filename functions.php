<?php

/**
 * Volley functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EQ
 */

if (!defined('_VOLLEY_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_VOLLEY_VERSION', '1.0.0');
}

if (!function_exists('volley_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function volley_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on volley, use a find and replace
		 * to change 'volley' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('volley', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		/*
		 *  
		 * 
		 * Custom Image Size 
		 * 
		 * 
		 * */

		// Preload & Placeholders
		add_image_size('preload', 15, 10, array('center', 'center'));
		// Two Column hero section
		add_image_size('preloadFull', 150);
		add_image_size('preloadHalf', 50);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'volley'),
				'menu-footer' => esc_html__('Footer', 'volley'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);


		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');
	}
endif;
add_action('after_setup_theme', 'volley_setup');

/**
 * Register widget area.
 *
 */
function volley_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Header Branding', 'volley'),
			'id'            => 'header-branding',
			'description'   => esc_html__('Add a custom logo for the header.', 'volley'),
			'before_widget' => '<div id="mainBranding" class="header-branding">',
			'after_widget'  => '</div>'
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer Branding', 'volley'),
			'id'            => 'footer-branding',
			'description'   => esc_html__('Add a custom logo to appear in the footer.', 'volley'),
			'before_widget' => '<div id="footerBranding" class="footer-branding">',
			'after_widget'  => '</div>'
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer Copyright', 'volley'),
			'id'            => 'footer-copyright',
			'description'   => esc_html__('Add copyright text to appear in the footer. Leave empty for default settings.', 'volley'),
			'before_widget' => '<div id="footerCopyright">',
			'after_widget'  => '</div>'
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer Credit Link', 'volley'),
			'id'            => 'footer-credit',
			'description'   => esc_html__('Add link to Credits.', 'volley'),
			'before_widget' => '<div id="footerCredit">',
			'after_widget'  => '</div>'
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer Menu', 'volley'),
			'id'            => 'footer-menu',
			'description'   => esc_html__('Footer Menu', 'volley'),
			'before_widget' => '<nav id="footerMenu">',
			'after_widget'  => '</nav>'
		)
	);
}
add_action('widgets_init', 'volley_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function volley_scripts()
{
	wp_enqueue_style('volley-style', get_template_directory_uri() . '/build/main.css', array(), _VOLLEY_VERSION);
	wp_enqueue_script('volley-navigation', get_template_directory_uri() . '/src/js/navigation.js', array(), _VOLLEY_VERSION, true);
	wp_enqueue_script('volley-main-js', get_template_directory_uri() . '/build/main-bundle.js', array(), _VOLLEY_VERSION, true);
	wp_enqueue_script('volley-slick-js', get_template_directory_uri() . '/build/slick.js', array(), _VOLLEY_VERSION, true);
}
add_action('wp_enqueue_scripts', 'volley_scripts');



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Add custom class to body
 */

function volley_add_page_slug_body_class($classes)
{
	global $post;

	if (isset($post)) {
		$classes[] = 'page-' . $post->post_name;
	}
	return $classes;
}

add_filter('body_class', 'volley_add_page_slug_body_class');

/**
 * Custom Function for Excerpt Size
 */
function eq_excerpt($num)
{
	$limit = $num + 1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ", $excerpt) . "...";
	echo $excerpt;
}

/**
 * Remove Menu Items from Dashboard
 */

function remove_menus()
{
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_menus');

/**
 * Change Dashboard Post Title to News
 */
function change_post_menu_label()
{
	global $menu;
	global $submenu;
	$menu[5][0] = 'News';
	$submenu['edit.php'][5][0] = 'All News';
	$submenu['edit.php'][10][0] = 'Add News';
	echo '';
}

function change_post_object_label()
{
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'News';
	$labels->singular_name = 'News';
	$labels->add_new = 'Add News';
	$labels->add_new_item = 'Add News';
	$labels->edit_item = 'Edit News';
	$labels->new_item = 'News';
	$labels->view_item = 'View News';
	$labels->search_items = 'Search News';
	$labels->not_found = 'No News found';
	$labels->not_found_in_trash = 'No News found in Trash';
}
add_action('init', 'change_post_object_label');
add_action('admin_menu', 'change_post_menu_label');


/*
*
*
*
* ACF Option Pages
*
*
*
*/

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer Settings',
		'menu_slug' 	=> 'footer-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}