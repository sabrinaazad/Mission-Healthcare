<?php


if (!function_exists('missiontheme')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function missiontheme()
    {
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
    }
endif;
add_action('after_setup_theme', 'missiontheme');


function missiontheme_scripts()
{
    wp_register_script('jQuery', '//code.jquery.com/jquery-3.5.1.min.js', null, null, true);
    wp_enqueue_script('jQuery');

    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    wp_enqueue_style('slick-theme-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');

    wp_enqueue_style('cardinal-styleheet', get_stylesheet_uri(), array(), rand(111, 9999));

    wp_register_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js', null, null, true);
    wp_enqueue_script('slick-js');

    wp_register_script('countUp-js', '//cdn.jsdelivr.net/countupjs/1.8.5/countUp.min.js', null, null, true);
    wp_enqueue_script('countUp-js');

    wp_register_script('scrollReveal-js', '//unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js', null, null, true);
    wp_enqueue_script('scrollReveal-js');

    wp_enqueue_script('cardinal-script', get_template_directory_uri() . '/scripts/main.js', array(), filemtime(get_template_directory() . '/scripts/main.js'), true);
}
add_action('wp_enqueue_scripts', 'missiontheme_scripts');



/* MENUS */
function register_menus()
{
    register_nav_menus(
        array(
            'top-nav' => __('Top Nav'),
            'primary-nav' => __('Primary Nav'),
            'footer-nav-1' => __('Footer Nav Left'),
            'footer-nav-2' => __('Footer Nav Right')
        )
    );
}
add_action('init', 'register_menus');



/* THEME FEATURES */
add_theme_support('title-tag');
add_theme_support('post-thumbnails');


/* DISABLE GUTENBERG */
add_filter('use_block_editor_for_post', '__return_false', 10);


/* PAGE TEXTAREA REMOVAL */
function remove_textarea()
{
    remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_textarea');


/* EXCERPT LENGTH */
add_filter( 'excerpt_length', function($length) {
    return 20;
}, PHP_INT_MAX );


/* WIDGETS */
function blog_widgets_init()
{
    register_sidebar(array(
        'name'          => 'Blog Sidebar',
        'id'            => 'blog-sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="heading">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'blog_widgets_init');


/* ADMIN FOOTER MODIFICATION */
function remove_footer_admin () 
{
    echo '<span id="footer-thankyou">Developed by <a href="http://www.cardinaldigitalmarketing.com" target="_blank">Cardinal Digital Marketing</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


/* CUSTOM POST TYPES */
function custom_post_types() {
 
    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-clipboard',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );

    register_post_type( 'leadership',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Leadership' ),
                'singular_name' => __( 'Leadership' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'leadership'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-businessperson',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );

    register_post_type( 'locations',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Locations' ),
                'singular_name' => __( 'Location' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'locations'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-location',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );
}
add_action( 'init', 'custom_post_types' );



function county_taxonomy() {
    register_taxonomy(
        'county_categories',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'locations',             // post type name
        array(
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'hierarchical' => true,
            'label' => 'Counties', // display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'county',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );
}
add_action( 'init', 'county_taxonomy');


function state_taxonomy() {
    register_taxonomy(
        'state_categories',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'locations',             // post type name
        array(
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'label' => 'States', // display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'state',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );
}
add_action( 'init', 'state_taxonomy');

function type_taxonomy() {
    register_taxonomy(
        'type_categories',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'services',             // post type name
        array(
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'label' => 'Service Type', // display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'type',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );
}
add_action( 'init', 'type_taxonomy');


function filter_post_type_link( $link, $post ) {
    if ( $post->post_type !== 'locations' )
        return $link;

    if ( $cats = get_the_terms($post->ID, 'state_categories') )
        $link = str_replace('%state_categories%', array_pop($cats)->slug, $link);

    return $link;
}
add_filter('post_type_link', 'filter_post_type_link', 10, 2);




/* THEMES OPTIONS */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'General Settings',
		'menu_slug' 	=> 'general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Topbar Settings',
		'menu_title'	=> 'Topbar',
		'parent_slug'	=> 'general-settings',
        'redirect'		=> false
	));
	
}


class Custom_Sublevel_Walker extends Walker_Nav_Menu
{
function start_lvl( &$output, $depth = 0, $args = array() ) {
$indent = str_repeat("\t", $depth);
$output .= "\n$indent<div class='sm-container'><ul class='sub-menu'>\n";
}
function end_lvl( &$output, $depth = 0, $args = array() ) {
$indent = str_repeat("\t", $depth);
$output .= "$indent</ul></div>\n";
}
}