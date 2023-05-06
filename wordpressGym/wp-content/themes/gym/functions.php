<?php
/**
 * tema_vacio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tema_vacio
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gymfitness_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on tema_vacio, use a find and replace
		* to change 'tema_vacio' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'tema_vacio', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	// Añade titulos dinámicos para cada página
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		* Añade la imagen destacada a los posts
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

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
			'tema_vacio_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'gymfitness_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tema_vacio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tema_vacio_content_width', 640 );
}
add_action( 'after_setup_theme', 'tema_vacio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tema_vacio_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tema_vacio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tema_vacio' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tema_vacio_widgets_init' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Añdiendo scripts y css
 */
function gymfit_scripts_styles(){
	wp_enqueue_style( 'normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1' );
	// El valor que va dentro de array(), siginifica que primero tiene que cargar lo que se le pasa por parámetro
	// En este caso primero carga normalize y despues el style
	wp_enqueue_style( 'style', get_stylesheet_uri(), array('normalize'), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'gymfit_scripts_styles' );

/**
 * Menu del tema
 * add_action = añade añade una nueva acción
 * init = la acción se ejecuta cuando se inicia el proyecto
 * add_filter = modifica una acción
 * Los menús se almacen en la Base de datos de WP en la tabla wp_terms
 */
function gym_fit_menu(){
	register_nav_menus( 
		array(
			// __() esta función sirve para traducir el texto en este caso de Menu principal
			// el gymfitness es el nombre del textdomain que se añade en el archivo CSS
			'menu-principal' => __( 'Menu principal', 'gymfitness' )
		)
	 );
}
add_action( 'init', 'gym_fit_menu');