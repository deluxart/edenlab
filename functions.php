<?php
/**
 * Edenlab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Edenlab
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'edenlab_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function edenlab_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Edenlab, use a find and replace
		 * to change 'edenlab' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'edenlab', get_template_directory() . '/languages' );

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
                'menu-header' => esc_html__( 'Header', 'kodjin' ),
                'menu-footer' => esc_html__( 'Footer', 'kodjin' ),
                'menu-header-crm' => esc_html__( 'Header - CRM', 'kodjin' ),
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
				'edenlab_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'edenlab_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function edenlab_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'edenlab_content_width', 640 );
}
add_action( 'after_setup_theme', 'edenlab_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function edenlab_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'edenlab' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'edenlab' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'edenlab_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function edenlab_scripts() {
    wp_enqueue_style( 'edenlab-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'edenlab-style', 'rtl', 'replace' );
    wp_enqueue_style( 'edenlab-styles', get_template_directory_uri() . '/styles/style.css?1121', array(), '1121' );
//    wp_enqueue_style( 'edenlab-blocks', get_template_directory_uri() . '/blocks/blocks.css', array(), '323230123998' );
    wp_enqueue_style( 'edenlab-liMarquee', get_template_directory_uri() . '/assets/libs/liMarquee.css', array(), _S_VERSION );
    wp_enqueue_style( 'edenlab-swiper', get_template_directory_uri() . '/assets/libs/swiper.min.css', array(), '555' );
    wp_enqueue_style( 'tretten-revealator', get_template_directory_uri() . '/assets/libs/fm.revealator.jquery.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'edenlab-fa', get_template_directory_uri() . '/assets/libs/all.min.css', array(), '444' );

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'edenlab-swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'edenlab-callPlayer', get_template_directory_uri() . '/js/callPlayer.js', array(), '00998877', true );

    wp_enqueue_script( 'edenlab-main', get_template_directory_uri() . '/js/main.js?444', array(), '4444', true );
    wp_enqueue_script( 'edenlab-sourcebuster', get_template_directory_uri() . '/js/sourcebuster.min.js', array(), '00333998877', true );
    wp_enqueue_script( 'edenlab-liMarquee', get_template_directory_uri() . '/js/jquery.liMarquee.js', array(), '00333998877', true );
    wp_enqueue_script( 'edenlab-scrollbar', get_template_directory_uri() . '/js/scrollBar.js', array(), '00333998877', true );
    wp_enqueue_script( 'edenlab-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'edenlab-exitintent', get_template_directory_uri() . '/assets/js/jquery.exitintent.min.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'edenlab_scripts' );

function admin_style() {
    wp_enqueue_style( 'admin-blocks', get_template_directory_uri() . '/blocks/blocks.css', array(), '4444323230123998' );
}
add_action('admin_enqueue_scripts', 'admin_style');

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
 * Custom post types.
 */
require get_template_directory() . '/inc/cases.php';
require get_template_directory() . '/inc/products.php';
require get_template_directory() . '/inc/services.php';
require get_template_directory() . '/inc/crm.php';


/**
 * Custom shortcodes
 */
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter( 'wpcf7_form_tag', function ( $tag ) {
    $datas = [];
    foreach ( (array)$tag['options'] as $option ) {
        if ( strpos( $option, 'data-' ) === 0 ) {
            $option = explode( ':', $option, 2 );
            $datas[$option[0]] = apply_filters('wpcf7_option_value', $option[1], $option[0]);
        }
    }
    if ( ! empty( $datas ) ) {
        $name = $tag['name'];
        $tag['name'] = $id = uniqid('wpcf');
        add_filter( 'wpcf7_form_elements', function ($content) use ($name, $id, $datas) {
            return str_replace($id, $name, str_replace("name=\"$id\"", "name=\"$name\" ". wpcf7_format_atts($datas), $content));
        });
    }
    return $tag;
} );

add_filter( 'get_the_archive_title', 'artabr_remove_name_cat' );
function artabr_remove_name_cat( $title ){
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_tax() ) { //for custom post types
        $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title( '', false );
    }
    return $title;
}

add_action( 'wp_footer', 'mycustom_wp_footer' );

function mycustom_wp_footer() {
    ?>
    <script type="text/javascript">
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            if ( '274' == event.detail.contactFormId ) {
                jQuery('#subscribe .form__wrap').hide();
                jQuery('#subscribe .form__sent').show();
            }
            if ( '759' == event.detail.contactFormId ) {
                jQuery('.subscribe__form .form__wrap').hide();
                jQuery('.subscribe__form .form__sent').show();
            }
            if ( '274' != event.detail.contactFormId ) {
                jQuery('#contact_us .form__wrap').hide();
                jQuery('#contact_us .form__sent').show();
            }

            if ( '2163' == event.detail.contactFormId ) {
                jQuery('#subscribe .form__wrap').hide();
                jQuery('#subscribe .form__sent').show();
            }

            //if ( '856' == event.detail.contactFormId ) {
            //    var redirectUrl = <?php
            //        $pdfFile = get_field('white_paper_url', 'option');
            //        echo $pdfFile ? "'" . esc_url($pdfFile) . "'" : "'https://edenlab.io/wp-content/uploads/2024/08/kodjin-interoperability-suite-07-24.pdf'";
            //        ?>//;
            //    location.href = redirectUrl;
            //    jQuery('.exitModal-popup.opened-modal .exitModal-close').click();
            //    jQuery('#whitepaper_modal .form__wrap').hide();
            //    jQuery('#whitepaper_modal .form__sent').show();
            //}

        }, false );
    </script>
    <?php
}


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme settings',
        'menu_title'	=> 'Theme options',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
}

function is_blog () {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

function eden_custom_excerpt_length( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'eden_custom_excerpt_length', 999 );

function new_excerpt_more($more) {
    global $post;
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

wpcf7_add_form_tag('country_by_ip', 'custom_cf7_country_by_ip', true);

function custom_cf7_country_by_ip($tag='') {
    $ip = $_SERVER['REMOTE_ADDR'];
    $cache_key = 'geo_info_' . $ip;
    $details = get_transient($cache_key);

    if ($details === false) {
        $response = wp_remote_get("https://ipinfo.io/{$ip}?token=7a520c61f98367");
        
        if (is_wp_error($response)) {
            return '';
        }

        $body = wp_remote_retrieve_body($response);
        $details = json_decode($body);

        // Кэшировать результат на 1 час
        set_transient($cache_key, $details, HOUR_IN_SECONDS);
    }

    $country = isset($details->country) ? $details->country : '';
    $city = isset($details->city) ? $details->city : '';

    return ($country) ? ($city . ', ' . $country) : '';
}


add_action( 'wpcf7_init', 'custom_add_form_tag_my_source' );
function custom_add_form_tag_my_source() {
    wpcf7_add_form_tag( 'country_by_ip', 'custom_cf7_country_by_ip' );
}

add_filter( 'wpcf7_special_mail_tags', 'your_special_mail_tag', 10, 3 );
function your_special_mail_tag( $output, $name, $html ) {
    if ( 'country_by_ip' == $name ) { $output = custom_cf7_country_by_ip(); }
    return $output;
}

function shapeSpace_enable_gutenberg_post_ids($can_edit, $post) {
    if (empty($post->ID)) return $can_edit;
    if (2157 === $post->ID) return true;
    return $can_edit;
}

add_filter('use_block_editor_for_post', 'shapeSpace_enable_gutenberg_post_ids', 10, 2);
