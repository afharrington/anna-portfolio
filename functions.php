<?php
/**
 * Anna Harrington functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Anna_Harrington
 */

if ( ! function_exists( 'annaharrington_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function annaharrington_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Anna Harrington, use a find and replace
		 * to change 'annaharrington' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'annaharrington', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'annaharrington' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'annaharrington_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'annaharrington_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function annaharrington_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'annaharrington_content_width', 640 );
}
add_action( 'after_setup_theme', 'annaharrington_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function annaharrington_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'annaharrington' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'annaharrington' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'annaharrington_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function annaharrington_scripts() {

	wp_enqueue_style( 'annaharrington-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_register_style( 'FontAwesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style('FontAwesome');

	wp_register_style( 'Animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css' );
	wp_enqueue_style('Animate');

	wp_register_style( 'AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css' );
	wp_enqueue_style('AOS');

	wp_register_script( 'AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', null, null, true );
	wp_enqueue_script('AOS');

	wp_enqueue_script('scripts', get_template_directory_uri() .'/assets/js/dist/app.min.js', array('jquery'), null, true);

}
add_action( 'wp_enqueue_scripts', 'annaharrington_scripts' );

/**
 * Include the file that registers custom post types
 */

require get_template_directory() . '/inc/custom.php';

/**
 * Enqueue Google Fonts
 */
function google_fonts() {
	$query_args = array(
		'family' => 'Josefin+Sans|Lato:300,400,400i,900|Poppins:400,700',
		'subset' => 'latin,latin-ext'
	);
	wp_enqueue_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
}
add_action('wp_enqueue_scripts', 'google_fonts');



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
