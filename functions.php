<?php
/**
 * Tower functions and definitions
 *
 * @package Tower
 */

if ( ! defined( 'TOWER_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'TOWER_VERSION', '1.0.0' );
}

if ( ! function_exists( 'tower_setup' ) ) :

	function tower_setup() {

		load_theme_textdomain( 'tower', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_post_type_support( 'page', 'excerpt' );
		add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat
		)
	);

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' 				=> esc_html__( 'Primary', 'tower' ),
				'footer-menu-1' => esc_html__( 'Footer Menu', 'tower' ),
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'tower_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

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
add_action( 'after_setup_theme', 'tower_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tower_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tower_content_width', 640 );
}
add_action( 'after_setup_theme', 'tower_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tower_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'tower' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here for any page that has an active sidebar.', 'tower' ),
			'before_widget' => '<div class="widget-section" id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'tower' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here to appear on the left of your footer.', 'tower' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'tower' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here to appear in the center of your footer.', 'tower' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'tower' ),
			'id'            => 'sidebar-4',
			'description'   => esc_html__( 'Add widgets here to appear on the right of your footer.', 'tower' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Custom Widget Area', 'tower' ),
			'id'            => 'custom-widget',
			'description'   => esc_html__( 'Add this widget in any template file.', 'tower' ),
			'before_widget' => '<section id="%1$s" class="custom-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="custom-widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'tower_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tower_styles() {

	/* THEME STYLESHEETS */
	// comment OUT the one below for local dev -> used for live site
	// wp_enqueue_style( 'tower-style', get_template_directory_uri() . '/css/style.css', array('fa-styles'), TOWER_VERSION );
	wp_style_add_data( 'tower-rtl', 'rtl', 'replace' );

	// UN-comment the one below for local dev
	wp_enqueue_style( 'tower-style', get_template_directory_uri() . '/css/style.css', [], time(), 'all' );

	/* FONT AWESOME */
	wp_register_style( 'load-fa-all', '//use.fontawesome.com/releases/v6.4.2/css/all.css' );
	wp_enqueue_style('load-fa-all');

	/* GOOGLE FONTS */
	/* Using @font-face and loading the fonts instead */

}
add_action( 'wp_enqueue_scripts', 'tower_styles' );

function tower_scripts() {

	/* THEME JAVASCRIPT FILES */
	wp_enqueue_script( 'tower-customizer', get_template_directory_uri() . '/js/customizer.js', array(), TOWER_VERSION, true );
	wp_enqueue_script( 'tower-menutoggle', get_template_directory_uri() . '/js/menutoggle.js', array(), TOWER_VERSION, true );
	wp_enqueue_script( 'tower-backtotop', get_template_directory_uri() . '/js/backtotop.js', array(), TOWER_VERSION, true );

	/* GOOGLE RECAPTCHA File */
	wp_register_script( 'tower-recaptcha', 'https://www.gstatic.com/recaptcha/releases/moV1mTgQ6S91nuTnmll4Y9yf/recaptcha__en.js' , '', '', true );
	wp_enqueue_script('tower-recaptcha');
	
}
add_action( 'wp_enqueue_scripts', 'tower_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

// register_default_headers 
register_default_headers( array(
	'orange' => array(
			'url'           => '/images/header1.jpg',
			'thumbnail_url' => '/images/header1-thumbnail.jpg',
			'description'   => __( 'Orange', 'tower' )
	),
	'blue' => array(
			'url'           => '/images/header2.jpg',
			'thumbnail_url' => '/images/header2-thumbnail.jpg',
			'description'   => __( 'Blue', 'tower' )
	),
	'green' => array(
			'url'           => '/images/header3.jpg',
			'thumbnail_url' => '/images/header3-thumbnail.jpg',
			'description'   => __( 'Green', 'tower' )
	)
) );

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
 * Set Excerpt Length
 */
function tower_set_excerpt_length(){
	return 50;
}
	
	add_filter('excerpt_length', 'tower_set_excerpt_length');

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function tower_excerpt_more( $more ) {
	return ' . . .';
}
add_filter( 'excerpt_more', 'tower_excerpt_more' );

// Stop WP adding extra <p> </p> to your pages' content
function specific_no_wpautop ( $content ) {
	if ( is_page () ) {
		remove_filter ( 'the_content', 'wpautop' );
	return $content;
	} else {
		return $content;
	}
}

add_filter ( 'the_content', 'specific_no_wpautop', 9 );

// Enable the use of Shortcodes
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Registers an editor stylesheet for the theme.
 */
function tower_theme_add_editor_styles() {
	add_editor_style( '/css/editor-style.css' );
}
add_action( 'admin_init', 'tower_theme_add_editor_styles' );

// breadcrumbs (where did i get this), NEED if child page
function get_breadcrumb() {
	echo '<a href="' . esc_url( home_url() ) . '" rel="nofollow">Home</a>';
	// echo '<a href="' . home_url( '/blog/' ) . '" rel="nofollow">Home</a>';
	// if (is_category() || is_single()){
	// 	echo '  »  ';
	// 	the_category (' • ');
	// 		if (is_single()) {
	// 			echo '  »  ';
	// 			the_title();
	// 		}
	if ( is_home() ){
		echo '  »  ';
		echo 'Articles';
} 	elseif (is_single()) {
		echo '  »  ';
		echo '<a href="' . esc_url( home_url( '/blog' ) ) . '" rel="nofollow">Website</a>';
		echo '  »  ';
		the_title();
} 	elseif (is_page()) {
		echo '  »  ';
		the_title();
} 	elseif (is_category()) {
		echo '  »  ';
		echo 'Category: ';
		echo single_cat_title();
} 	elseif (is_tag()) {
		echo '  »  ';
		echo 'Tag: ';
		echo single_tag_title();
} 	elseif (is_author()) {
		echo '  »  ';
		echo 'Author archive for ' . get_the_author();
} 	elseif (is_archive()) {
		echo '  »  ';
		the_title();
	} elseif (is_search()) {
		echo '  »  ';
		echo '<span class="highlight">Search Results for… ' . esc_html( the_search_query() ) . '</span>';
	}
}

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// inline google analytics script via wp_print_scripts
function tower_google_print_scripts() { 
	
	?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K2CLFZCEDW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K2CLFZCEDW');
</script>
	
	<?php
	
}
add_action('wp_print_scripts', 'tower_google_print_scripts');

// inline Font Awesome script via wp_print_scripts
function tower_fa_print_scripts() { 
	
	?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<?php
	
}
// add_action('wp_print_scripts', 'tower_fa_print_scripts');

// to hide max-image-preview:large directive to the robots meta tag
// remove_filter('wp_robots', 'wp_robots_max_image_preview_large');

// DISABLE EMBEDS (videos, images, tweets, audio, etc)
add_action('wp-footer', function(){
	wp_dequeue_script( 'wp-embed' );
});

// REMOVE BLOCK LIBRARY CSS
add_action('wp_enqueue_scripts', function(){
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_script( 'comment-reply' );
});

// Deregister jQuery, replace with new version
function replace_default_jquery_with_fallback() {
    $ver = '1.12.4';

    wp_dequeue_script( 'jquery' );
    wp_deregister_script( 'jquery' );

    // Set last parameter to 'true' if you want to load it in footer
    wp_register_script( 'jquery', "//ajax.googleapis.com/ajax/libs/jquery/$ver/jquery.min.js", '', $ver, true );

    wp_add_inline_script( 'jquery', 'window.jQuery||document.write(\'<script src="'.includes_url( '/js/jquery/jquery.js' ).'"><\/script>\')' );

    wp_enqueue_script ( 'jquery' );
}
add_filter( 'wp_enqueue_scripts', 'replace_default_jquery_with_fallback');