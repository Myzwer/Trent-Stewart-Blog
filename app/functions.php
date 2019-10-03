<?php
add_theme_support( 'post-thumbnails' );

// Main Style Sheet
wp_enqueue_style( 'style', get_stylesheet_uri() );

// Foundation CSS
function load_foundation() {
	wp_enqueue_style( 'foundation.min', get_template_directory_uri() . '/assets/css/foundation.min.css');
}
add_action('wp_enqueue_scripts', 'load_foundation');

//Main stylesheet for general code
function load_main_style() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'load_main_style');


//Font-Awesome Icons
function load_font_awesome() {
wp_register_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css' );
wp_enqueue_style('Font_Awesome');
}
add_action('wp_enqueue_scripts', 'load_font_awesome');



//Foudnation JS
		
wp_enqueue_script( 'jquery' );

function foundation_js_loadin() {
wp_enqueue_script( 'foundation.min', get_template_directory_uri() . '/assets/js/vendor/foundation.min.js');
}
add_action('wp_enqueue_scripts', 'foundation_js_loadin');

function what_input_loadin() {
wp_enqueue_script( 'what-input', get_template_directory_uri() . '/assets/js/vendor/what-input.js');
}
add_action('wp_enqueue_scripts', 'what_input_loadin');

function custom_loadin() {
wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js');
}
add_action('wp_enqueue_scripts', 'custom_loadin');


//Foundation Icons
function icon_css() {
wp_enqueue_style( 'foundation-icons', get_template_directory_uri() . '/assets/fonts/foundation-icons.css');
}
add_action('wp_enqueue_scripts', 'icon_css');


//Raleway Registration
wp_register_style( 'raleway_font', 'https://fonts.googleapis.com/css?family=Raleway:400,700' );
wp_enqueue_style('raleway_font');

wp_register_style( 'roboto_font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap" ' );
wp_enqueue_style('roboto_font');





/**
 * Register a custom post type called "Broadcast".
 *
 * @see get_post_type_labels() for label keys.
 */
function broadcast_init() {
    $labels = array(
        'name'                  => __( 'Broadcasts'),
        'singular_name'         => __( 'Broadcast'),
        'menu_name'             => __( 'Broadcasts'),
        'name_admin_bar'        => __( 'Broadcast'),
        'add_new'               => __( 'Add New'),
        'add_new_item'          => __( 'Add New Broadcast'),
        'new_item'              => __( 'New Broadcast'),
        'edit_item'             => __( 'Edit Broadcast'),
        'view_item'             => __( 'View Broadcast'),
        'all_items'             => __( 'All Broadcasts'),
        'search_items'          => __( 'Search Broadcasts'),
        'parent_item_colon'     => __( 'Parent Broadcasts:'),
        'not_found'             => __( 'No Broadcasts found.'),
        'not_found_in_trash'    => __( 'No Broadcasts found in Trash.'),
        'archives'              => __( 'Broadcast archives'),
        'insert_into_item'      => __( 'Insert into Broadcast'),
        'uploaded_to_this_item' => __( 'Uploaded to this Broadcast'),
        'filter_items_list'     => __( 'Filter Broadcast list'),
        'items_list_navigation' => __( 'Broadcast list navigation'),
        'items_list'            => __( 'Broadcast list'),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'broadcast' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_icon'          => 'dashicons-upload'
    );
 
    register_post_type( 'broadcast', $args );


// This is the taxonomy
    register_taxonomy('format', 'broadcast',
        array(
            'labels' => array(
                    'name' => __( 'Formats' ),
                    'singular_name' => __( 'Format' ),
                    'add_new_item' => __( 'Add New Format' ),
                    'edit_item' => __( 'Edit Format' ),
                    'new_item_name' => __( 'New Format Name' ),
                    'view' => __( 'View Format' ),
                    'view_item' => __( 'View Format' ),
                    'search_items' => __( 'Search Formats' ),
                    'not_found' => __( 'No Formats found' ),
                    'not_found_in_trash' => __( 'No Formats found in Trash' ),
                    'parent_item' => __( 'Parent Format' ),
            ),
            'hierarchical' => false,
            'rewrite'      => array( 'slug' => 'format' )
        )
    );






}
 
add_action( 'init', 'broadcast_init' );


function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}


?>