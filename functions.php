<?php
/**
 * first-theme-unison functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package first-theme-unison
 */

if ( ! function_exists( 'first_theme_unison_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
    define("MY_THEME_TEXTDOMAIN", 'first-theme-unyson');
	function first_theme_unison_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on first-theme-unison, use a find and replace
		 * to change 'first-theme-unison' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( MY_THEME_TEXTDOMAIN, get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'first-theme-unison' ),
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
		add_theme_support( 'custom-background', apply_filters( 'first_theme_unison_custom_background_args', array(
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
add_action( 'after_setup_theme', 'first_theme_unison_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function first_theme_unison_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'first_theme_unison_content_width', 640 );
}
add_action( 'after_setup_theme', 'first_theme_unison_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function first_theme_unison_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'first-theme-unison' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'first-theme-unison' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="font-italic">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'first_theme_unison_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function first_theme_unison_scripts() {
	wp_enqueue_style( 'first-theme-unison-style', get_stylesheet_uri() );

    wp_enqueue_style( 'first-theme-unison-theme-style', get_template_directory_uri(). '/css/theme.css' );
    wp_enqueue_style( 'first-theme-unison-theme-media', get_template_directory_uri(). '/css/media.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.css' );
    wp_enqueue_style( 'blog', get_template_directory_uri(). '/css/blog.css' );
    wp_enqueue_style( 'font-css', get_template_directory_uri(). '/css/font.css' );
	wp_enqueue_script( 'first-theme-unison-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'first-theme-unison-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'first_theme_unison_scripts' );

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
/********************************************************************/
/**
 * Load TGM PLUGINS.
 */
require get_template_directory() . '/tgm-plugin-activation/first-theme-tgm-activation.php';
/**
 * *Добавить в {theme} body-color option

 */
function _action_theme_wp_print_styles() {
    if (!defined('FW')) return; // prevent fatal error when the framework is not active

    $option_value = fw_get_db_customizer_option('body-color');

    echo '<style type="text/css">'
        . '.footer-bs { '
        . 'background-color:'. esc_html($option_value) .'; '
        . '}'
        . '</style>';
}
add_action('wp_print_styles', '_action_theme_wp_print_styles');

/**
 * *Добавить Post Options в framework-customizations/theme/options/posts/post.php

 */

function action_theme_wp_print_styles() {
    if (!defined('FW')) return; // prevent fatal error when the framework is not active

    global $post;

    if (!$post || $post->post_type != 'post') {
        return;
    }

    $option_value = fw_get_db_post_option($post->ID, 'body-color');

    echo '<style type="text/css">'
        . 'body { '
        . 'border: 30px solid '. esc_html($option_value) .'; '
        . '}'
        . '</style>';
}
add_action('wp_print_styles', 'action_theme_wp_print_styles');
/**
 * *Добавить в {theme} body-color option

 */


function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="p-2 text-muted"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

/**
 * Custom Post Type Cat
 */
function my_custom_post_system_autoplay() {
    $labels = array(
        'name'               => _x( 'Системы автополива', 'post type general name' ),
        'singular_name'      => _x( 'Системы автополива', 'post type singular name' ),
        'add_new'            => _x( 'Добавить', 'cat' ),
        'add_new_item'       => __( 'Добавить' ),
        'edit_item'          => __( 'Редактировать' ),
        'new_item'           => __( 'Новая система автополива' ),
        'all_items'          => __( 'Все системы' ),
        'view_item'          => __( 'Просмотр систем автополива' ),
        'search_items'       => __( 'Поиск систем автополива' ),
        'not_found'          => __( 'Система автополива не найдена' ),
        'not_found_in_trash' => __( 'Система автополива не найдена в корзине' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Система автополива'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our products and product specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'system', $args );
    flush_rewrite_rules(false);
}
add_action( 'init', 'my_custom_post_system_autoplay' );

/**/
function _theme_wp_print_styles() {
    if (!defined('FW')) return; // prevent fatal error when the framework is not active

    $array = fw_get_db_settings_option('option_upload');

    echo '<style type="text/css">'
        . '.myback { '
        . 'background-image: url('. esc_html($array['url']) .'); '
        . 'color: '. fw_get_db_settings_option('body-color') .'; '
        . '}'

        . '</style>';
}
add_action('wp_print_styles', '_theme_wp_print_styles');




/*register footer menu*/
add_action( 'after_setup_theme', 'theme_register_footer_menu' );
function theme_register_footer_menu() {
    register_nav_menu( 'footer-menu', 'Footer Menu' );
}
/*end register footer menu*/

/*register social menu*/
add_action( 'after_setup_theme', 'theme_register_social_menu' );
function theme_register_social_menu() {
    register_nav_menu( 'social-menu', 'Social Menu' );
}
/*end register footer menu*/