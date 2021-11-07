<?php

/**
 * postery functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package postery
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.5');
}

if (!function_exists('postery_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function postery_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on postery, use a find and replace
		 * to change 'postery' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('postery', get_template_directory() . '/languages');

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'postery'),
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'postery_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'postery_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function postery_content_width()
{
	$GLOBALS['content_width'] = apply_filters('postery_content_width', 1140);
}
add_action('after_setup_theme', 'postery_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function postery_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'postery'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'postery'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'postery_widgets_init');

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
	show_admin_bar(false);
}

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/**
 * Enqueue scripts and styles.
 */
function postery_scripts()
{
	if (!is_admin()) {
		wp_deregister_script('wp-embed');
		wp_deregister_script('wp-emoji');
	}
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');

	wp_enqueue_style('postery-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;800&display=swap', array(), _S_VERSION, 'all');
	wp_enqueue_style('postery-feather', get_template_directory_uri() . '/assets/fonts/Feather/feather.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('postery-fancybox', get_template_directory_uri() . '/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('postery-aos', get_template_directory_uri() . '/assets/libs/aos/dist/aos.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('postery-choices', get_template_directory_uri() . '/assets/libs/choices.js/public/assets/styles/choices.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('postery-flickity-fade', get_template_directory_uri() . '/assets/libs/flickity-fade/flickity-fade.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('postery-flickity', get_template_directory_uri() . '/assets/libs/flickity/dist/flickity.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('postery-highlight', get_template_directory_uri() . '/assets/libs/highlightjs/styles/vs2015.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('postery-jarallax', get_template_directory_uri() . '/assets/libs/jarallax/dist/jarallax.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('postery-quill', get_template_directory_uri() . '/assets/libs/quill/dist/quill.core.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('postery-style', get_template_directory_uri() . '/assets/css/theme.css', array(), _S_VERSION, 'all');


	// Internet Explorer HTML5 support
	wp_enqueue_script('html5hiv', get_template_directory_uri() . '/inc/assets/js/html5.js', array(), _S_VERSION, false);
	wp_script_add_data('html5hiv', 'conditional', 'lt IE 9');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'postery_scripts', 0);


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

function postery_posters_setup()
{
	// creating (registering) the Poster 
	register_post_type(
		'poster', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		//	let's now add all the options for this post type
		array(
			'labels' => array(
				'name' => __('Posters', 'wobl'), /* This is the Title of the Group */
				'singular_name' => __('Poster', 'wobl'), /* This is the individual type */
				'all_items' => __('All Posters', 'wobl'), /* the all items menu item */
				'add_new' => __('Add New', 'wobl'), /* The add new menu item */
				'add_new_item' => __('Add New Poster', 'wobl'), /* Add New Display Title */
				'edit' => __('Edit', 'wobl'), /* Edit Dialog */
				'edit_item' => __('Edit Post Types', 'wobl'), /* Edit Display Title */
				'new_item' => __('New Post Type', 'wobl'), /* New Display Title */
				'view_item' => __('View Post Type', 'wobl'), /* View Display Title */
				'search_items' => __('Search Post Type', 'wobl'), /* Search Poster Title */
				'not_found' =>  __('Nothing found in the Database.', 'wobl'), /* This displays if there are no entries yet */
				'not_found_in_trash' => __('Nothing found in Trash', 'wobl'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __('This is the example Poster type', 'wobl'), /* Poster Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 1, /* this is what order you want it to appear in on the left hand side menu */
			'rewrite'	=> array('slug' => 'poster', 'with_front' => false),
			'has_archive' => 'poster',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
		) /* end of options */
	); /* end of register post type */
}
// adding the function to the Wordpress init
add_action('init', 'postery_posters_setup');


// attribute slug to title
if (!function_exists('attribute_slug_to_title')) {
	function attribute_slug_to_title($attribute, $slug)
	{
		global $woocommerce;
		if (taxonomy_exists(esc_attr(str_replace('attribute_', '', $attribute)))) {
			$term = get_term_by('slug', $slug, esc_attr(str_replace('attribute_', '', $attribute)));
			if (!is_wp_error($term) && $term->name) {
				$value = $term->name;
			}
		} else {
			$value = apply_filters('woocommerce_variation_option_name', $value);
		}
		return $value;
	}
}

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 30);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 40);
