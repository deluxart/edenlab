<?php
add_action( 'init', 'eden_products_func' );

function eden_products_func() {
    $labels = array(
        'name' => 'Products',
        'singular_name' => 'Products',
        'add_new' => 'Add product',
        'add_new_item' => 'Add new product',
        'edit_item' => 'Edit product',
        'new_item' => 'New product',
        'all_items' => 'All products',
        'search_items' => 'Products search',
        'menu_name' => 'Products'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-editor-kitchensink',
        'menu_position' => 5,
        'supports' => array( 'title', 'revisions')
    );
    register_post_type('product', $args);
}

// Shortcode for cases [cases-list posts="3"]
function product_listing_parameters_shortcode( $atts ) {
    ob_start();

    $args = shortcode_atts( array (
        'type' => 'product',
        'posts' => 12,
    ), $atts );

    $options = array(
        'post_type' => $args['type'],
        'posts_per_page' => $args['posts'],
    );

    $query = new WP_Query( $options );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) : $query->the_post();;
            get_template_part( 'template-parts/product-card', get_post_format() );
        endwhile;
        wp_reset_postdata();
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'product-list', 'product_listing_parameters_shortcode' );

?>