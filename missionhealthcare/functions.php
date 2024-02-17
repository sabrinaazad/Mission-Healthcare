<?php


if ( ! function_exists( 'missionhealthcare' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function missionhealthcare() {
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
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

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
    }
endif;
add_action( 'after_setup_theme', 'missionhealthcare' );

function missionhealthcare_scripts() {

    wp_register_script( 'jQuery', '//code.jquery.com/jquery-3.5.1.min.js', null, null, true );
    wp_enqueue_script('jQuery');
    
    wp_enqueue_style( 'Open-Sans', '//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800' );

    wp_enqueue_style( 'Merriweather', '//fonts.googleapis.com/css?family=Merriweather:300,400,500,600,700,800' );

    wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
    
    wp_enqueue_style( 'slick-styles', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );

    wp_enqueue_style( 'missionhealthcare-styleheet', get_stylesheet_uri() , array(), rand(111,9999)  );			

    wp_enqueue_script( 'missionhealthcare-script', get_template_directory_uri() . '/scripts/script.js', array(), filemtime(get_template_directory() . '/scripts/script.js'), true );

    wp_register_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', null, null, true );
    wp_enqueue_script('slick');

}
add_action( 'wp_enqueue_scripts', 'missionhealthcare_scripts' );



/*=============================================
                    MENUS
=============================================*/
function register_menus() {
    register_nav_menus(
        array(
        'primary-nav' => __( 'Primary Nav' ),
        'secondary-nav' => __( 'Secondary Nav' ),
        'footer-nav' => __( 'Footer Nav' )
        )
    );
}
add_action( 'init', 'register_menus' );



/*=============================================
                THEME FEATURES
=============================================*/
add_theme_support( 'title-tag' );



/*=============================================
              CUSTOM POST TYPES
=============================================*/

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


function filter_post_type_link( $link, $post ) {
    if ( $post->post_type !== 'locations' )
        return $link;

    if ( $cats = get_the_terms($post->ID, 'state_categories') )
        $link = str_replace('%state_categories%', array_pop($cats)->slug, $link);

    return $link;
}
add_filter('post_type_link', 'filter_post_type_link', 10, 2);



add_action('init', 'location_cpt');
function location_cpt() {
    $supports = array(
        'title', 
        'editor', 
        'author', 
        'thumbnail', 
        'excerpt', 
        'custom-fields', 
        'comments', 
        'revisions', 
        'post-formats', 
    );  
    $labels = array(
        'name' => _x('Locations', 'plural'),
        'singular_name' => _x('Location', 'singular'),
        'menu_name' => _x('Locations', 'admin menu'),
        'name_admin_bar' => _x('Locations', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Location'),
        'new_item' => __('New Location'),
        'edit_item' => __('Edit Location'),
        'view_item' => __('View Location'),
        'all_items' => __('All Locations'),
        'search_items' => __('Search Locations'),
        'not_found' => __('No Location found.'),
    );  
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'can_export' => true,
        'taxonomies' => array( 'post_tag','state_categories'),
        'rewrite' => array( 'slug' => 'location/%state_categories%', 'with_front' => FALSE ),
        'has_archive' => 'locations',
        'hierarchical' => false,
    );
    register_post_type('locations', $args);
}
 


function default_taxonomy_term( $post_id, $post ) {
    if ( 'publish' === $post->post_status ) {
        $defaults = array(
            'state_categories' => array('other'),
        );
        $taxonomies = get_object_taxonomies( $post->post_type );
        foreach ( (array) $taxonomies as $taxonomy ) {
            $terms = wp_get_post_terms( $post_id, $taxonomy );
            if ( empty($terms) && array_key_exists( $taxonomy, $defaults ) ) {
                wp_set_object_terms( $post_id, $defaults[$taxonomy], $taxonomy );
            }
        }
    }
}
add_action( 'save_post', 'default_taxonomy_term', 100, 2 );



/*=============================================
                    WIDGETS
=============================================*/
function missionhealthcare_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'missionhealthcare' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'missionhealthcare' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

  register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'missionhealthcare' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'missionhealthcare' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'missionhealthcare_widgets_init' );



/*=============================================
                  BREADCRUMBS
=============================================*/
function the_breadcrumb()
{
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '&raquo;'; // delimiter between crumbs
    $home = 'Home'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb

    global $post;
    $homeLink = get_bloginfo('url');
    if (is_home() || is_front_page()) {
        if ($showOnHome == 1) {
            echo '<div id="breadcrumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
        }
    } else {
        echo '<div id="breadcrumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                echo get_category_parents($thisCat->parent, true, ' ' . $delimiter . ' ');
            }
            echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
        } elseif (is_search()) {
            echo $before . 'Search results for "' . get_search_query() . '"' . $after;
        } elseif (is_day()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
                if ($showCurrent == 1) {
                    echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
                }
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, true, ' ' . $delimiter . ' ');
                if ($showCurrent == 0) {
                    $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                }
                echo $cats;
                if ($showCurrent == 1) {
                    echo $before . get_the_title() . $after;
                }
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, true, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_page() && !$post->post_parent) {
            if ($showCurrent == 1) {
                echo $before . get_the_title() . $after;
            }
        } elseif (is_page() && $post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo $breadcrumbs[$i];
                if ($i != count($breadcrumbs)-1) {
                    echo ' ' . $delimiter . ' ';
                }
            }
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_tag()) {
            echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . 'Articles posted by ' . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . 'Error 404' . $after;
        }
        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ' (';
            }
            echo __('Page') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ')';
            }
        }
        echo '</div>';
    }
} 


/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy');
function tsm_filter_post_type_by_taxonomy() {
	global $typenow;
	$post_type = 'locations'; // change to your post type
	$taxonomy  = 'state_categories'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => sprintf( __( 'Show all %s', 'textdomain' ), $info_taxonomy->label ),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}
/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_filter('parse_query', 'tsm_convert_id_to_term_in_query');
function tsm_convert_id_to_term_in_query($query) {
	global $pagenow;
	$post_type = 'locations'; // change to your post type
	$taxonomy  = 'state_categories'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}