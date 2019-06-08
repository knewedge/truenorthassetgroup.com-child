<?php
function css_enqueue_styles(){
	//enqueue child styles
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/custom.css', array('parent-theme'));
	//enqueue parent styles
	wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');
	//enqueue modal styles
	wp_enqueue_style('child-theme', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css');
	//enqueue modal script
	wp_enqueue_script('child-theme', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js');	
}
add_action('wp_enqueue_scripts','css_enqueue_styles');
/*Services Section*/
function services_section_widget_init(){
	 register_sidebar(array('name' => 'Services Section','id' => 'services-section','before_widget' => '<div class="services-section-widget">', 'after_widget' => '</div>', 'before_title' => '<h3 class="services-section-title">', 'after_title' => '</h3>' ) );
}
add_action('widgets_init','services_section_widget_init');
/*Get In Touch Section*/
function getintouch_section_widget_init(){
	 register_sidebar(array('name' => 'Get In Touch Section','id' => 'getintouch-section','before_widget' => '<div class="getintouch-section-widget">', 'after_widget' => '</div>', 'before_title' => '<h3 class="getintouch-section-title">', 'after_title' => '</h3>' ) );
}
add_action('widgets_init','getintouch_section_widget_init');
/*Stay Connected Section*/
function connected_section_widget_init(){
	 register_sidebar(array('name' => 'Connected Section','id' => 'connected-section','before_widget' => '<div class="connected-section-widget">', 'after_widget' => '</div>', 'before_title' => '<h3 class="connected-section-title">', 'after_title' => '</h3>' ) );
}
add_action('widgets_init','connected_section_widget_init');
/* Creating a function to create our CPT*/
function custom_post_type(){
    $labels = array(
        'name'                => _x( 'Listings', 'Post Type General Name', 'knewedge' ),
        'singular_name'       => _x( 'Listing', 'Post Type Singular Name', 'knewedge' ),
        'menu_name'           => __( 'Listings', 'knewedge' ),
        'parent_item_colon'   => __( 'Parent Listing', 'knewedge' ),
        'all_items'           => __( 'All Listings', 'knewedge' ),
        'view_item'           => __( 'View Listing', 'knewedge' ),
        'add_new_item'        => __( 'Add New Listing', 'knewedge' ),
        'add_new'             => __( 'Add New', 'knewedge' ),
        'edit_item'           => __( 'Edit Listing', 'knewedge' ),
        'update_item'         => __( 'Update Listing', 'knewedge' ),
        'search_items'        => __( 'Search Listings', 'knewedge' ),
        'not_found'           => __( 'Not Found', 'knewedge' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'knewedge' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'listings', 'knewedge' ),
        'description'         => __( 'Listings', 'knewedge' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
		'menu_icon'           => 'dashicons-location',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'listings', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );

/*Slick Carousel*/
function slick_carousel(){
	wp_enqueue_style('slick','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_enqueue_script( 'slick','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
}
add_action( 'wp_enqueue_scripts', 'slick_carousel' );
/*WP Search Short Code*/
add_shortcode('wpsearch', 'get_search_form');
/*Limit Search to Listings*/
function exclude_pages_from_search($query) {
    if ( $query->is_main_query() && is_search() ) {
        $query->set( 'post_type', 'listings' );
    }
    return $query;
}
add_filter( 'pre_get_posts','exclude_pages_from_search' );
?>
