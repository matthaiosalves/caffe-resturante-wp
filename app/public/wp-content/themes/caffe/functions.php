<?php
/**
 * Caffe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Caffe
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
function caffe_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Caffe, use a find and replace
		* to change 'caffe' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'caffe', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'caffe' ),
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
			'caffe_custom_background_args',
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
add_action( 'after_setup_theme', 'caffe_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function caffe_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'caffe_content_width', 640 );
}
add_action( 'after_setup_theme', 'caffe_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function caffe_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'caffe' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'caffe' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'caffe_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function caffe_scripts() {
	wp_enqueue_style( 'caffe-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'caffe-style', 'rtl', 'replace' );

	wp_enqueue_script( 'caffe-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'caffe-cities', get_template_directory_uri() . '/src/js/cities.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'caffe-script', get_template_directory_uri() . '/src/js/script.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'caffe-address', get_template_directory_uri() . '/src/js/address.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'caffe-payment', get_template_directory_uri() . '/src/js/payment.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'caffe_scripts' );

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


/*FUNCTION QUE REGISTRA NOVO TIPO DE PRODUTO*/
function create_products() {
  register_post_type( 'products', [
      'labels' => [
        'name' => "Produtos",
        'singular_name' => "Produtos",
        'menu_name' => "Produtos",
        'name_admin_bar' => "Produtos",
        'add_new' => "Adicionar Produto",
        'add_new_item' => "Adicionar Produto",
        'new_item' => "Novo Produto",
        'edit_item' => "Editar Produto",
        'view_item' => "Visualizar Produto",
        'all_items' => "Todas os Produtos",
        'search_items' => "Procurar Produto",
        'parent_item_colon' => "Postagens Filhas:",
        'not_found' => "Nenhuma Produto foi encontrada",
        'not_found_in_trash' => "Nenhuma Produto no lixo"
      ],
      'description' => 'Descrição',
      'public' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'rewrite' => array('slug' => 'products'),
      'copability_type' => 'post',
      'hierarchical' => false,
      'menu_position' => 2,
      'taxonomies' => array( 'category', 'products' ),
      'has_archive' => false,
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
      'show_in_rest' => true,
    ]
  );
}
add_action( 'init', 'create_products' );


/*DESABILITAR COMENTÁRIOS */
function disable_media_comment( $open, $post_id ) {
	$post = get_post( $post_id );
	if( $post->post_type == 'attachment' ) {
			return false;
	}
	return $open;
}
add_filter( 'comments_open', 'disable_media_comment', 10 , 2 );

