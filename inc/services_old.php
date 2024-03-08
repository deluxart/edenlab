<?php
add_action('init', 'create_post_type_services');

function create_post_type_services() {
    register_post_type('services',
        array(
            'labels' => array(
                'name' => 'Services',
                'singular_name' => 'Services',
                'add_new' => 'Add service',
                'add_new_item' => 'Add new service',
                'edit_item' => 'Edit service',
                'new_item' => 'New service',
                'all_items' => 'All services',
                'search_items' => 'Search service',
                'not_found' =>  'Services not found.',
                'not_found_in_trash' => 'service not found.',
                'menu_name' => 'Services',
            ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => 'services',
            'show_ui' => true,
            'menu_icon' => 'dashicons-excerpt-view',
            'query_var' => true,
            'capability_type' => 'post',
//          'rewrite' => array('slug' => 'services/%services%'),
            'rewrite' => array('slug' => 'services'),
            'exclude_from_search' =>false,
            'hierarchical' => true,
            'menu_position' => 5,
            'taxonomies' => array('service'),
            'supports' => array('title', 'custom-fields','thumbnail'),
        )
    );
    register_taxonomy( 'service', 'services', array(
            'hierarchical' => true,
            'label' => 'Categories',
            'query_var' => true,
            'rewrite' => array('slug' => 'services'),
        )
    );

}


function wpa_service_post_link( $post_link, $id = 0 ){
    $post = get_post($id);
    if ( is_object( $post ) ){
        $terms = wp_get_object_terms( $post->ID, 'service' );
        if( $terms ){
            return str_replace( '%service%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;
}
add_filter( 'post_type_link', 'wpa_service_post_link', 1, 3 );

add_action("admin_init", "admin_init_service");

function admin_init_service(){
    add_meta_box("service_single_metabox", "Шорткод", "meta_options_service", "service", "side", "high");
}

function meta_options_service(){
    global $post;
    $custom = get_post_custom($post->ID);
    $custom_id = $post->ID;
    ?>
    <label>service shortcode:</label><input type='text' onfocus='this.select();' style='width: 100%;' readonly='' value='[service id="<?php echo $custom_id; ?>"]' class='large-text code' />
    <?php
}

add_shortcode( 'service',  'call_shortcode_service' );
function call_shortcode_service( $atts ) {
    ob_start();
    $atts = shortcode_atts( array( 'id' => null ), $atts );
    $clinic_query = new WP_Query( array(
        'post_type' => 'services',
        'p' => intval( $atts['id'] )
    ));

    echo '<div class="service">';
    if ( $clinic_query->have_posts() ) :
        while ( $clinic_query->have_posts() ) : $clinic_query->the_post();
            get_template_part( 'template-parts/service', get_post_format() );
        endwhile;
    else :
        get_template_part( 'template-parts/content', 'none' );
    endif;
    echo '</div>';

    wp_reset_postdata();
    return ob_get_clean();
}

// Shortcode for services [services-list posts="3"]
function services_listing_parameters_shortcode( $atts ) {
    ob_start();

    $args = shortcode_atts( array (
        'type' => 'services',
        'posts' => 6,
    ), $atts );

    $options = array(
        'post_type' => $args['type'],
        'posts_per_page' => $args['posts'],
    );

    $query = new WP_Query( $options );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) : $query->the_post();;
            echo '<div class="item">';
                get_template_part( 'template-parts/service-card', get_post_format() );
            echo '</div>';
        endwhile;
        wp_reset_postdata();
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'services-list', 'services_listing_parameters_shortcode' );

//function archive_to_custom_archive_services() {
//    if( is_post_type_archive( 'post_slug' ) ) {
//        wp_redirect( home_url( '/services/' ), 301 );
//        exit();
//    }
//}
//add_action( 'template_redirect', 'archive_to_custom_archive_services' );
//
//function generate_services_rewrite_rules( $wp_rewrite ) {
//
//    $rules = array();
//
//    $post_types = get_post_types( array( 'public' => true, '_builtin' => false ), 'services' );
//    $taxonomies = get_taxonomies( array( 'public' => true, '_builtin' => false ), 'service' );
//
//    foreach ( $post_types as $post_type ) {
//        $post_type_name = $post_type->name;
//        $post_type_slug = $post_type->rewrite['slug'];
//
//        foreach ( $taxonomies as $taxonomy ) {
//            if ( $taxonomy->object_type[0] == $post_type_name ) {
//                $terms = get_categories( array( 'type' => $post_type_name, 'taxonomy' => $taxonomy->name, 'hide_empty' => 0 ) );
//                foreach ( $terms as $term ) {
//                    $rules[$post_type_slug . '/' . $term->slug . '/?$'] = 'index.php?' . $term->taxonomy . '=' . $term->slug;
//                    $rules[$post_type_slug . '/' . $term->slug . '/page/?([0-9]{1,})/?$'] = 'index.php?' . $term->taxonomy . '=' . $term->slug . '&paged=' . $wp_rewrite->preg_index( 1 );
//                }
//            }
//        }
//    }
//
//    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
//
//}
//
//add_action('generate_rewrite_rules', 'generate_services_rewrite_rules');
//
//add_filter('init', function() {
//    add_rewrite_rule(
//        '^services/([^/]*)/([^/]*)/(\d*)?',
//        'index.php?service=$matches[1]&p=$matches[2]&paged=$matches[3]',
//        'top'
//    );
//});
?>