<?php
add_action( 'init', 'eden_crm_func' );

function eden_crm_func() {
    $labels = array(
        'name' => 'CRM',
        'singular_name' => 'Cases',
        'add_new' => 'Add case',
        'add_new_item' => 'Add new case',
        'edit_item' => 'Edit case',
        'new_item' => 'New case',
        'all_items' => 'All cases',
        'search_items' => 'Cases search',
        'menu_name' => 'CRM Cases'
    );
    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-slides',
        'menu_position' => 5,
        'supports' => array( 'title', 'revisions')
    );
    register_post_type('crm', $args);
}

// Shortcode for cases [cases-list-home posts="3"]
function crm_listing_home_shortcode( $atts ) {
    ob_start();

    $args = shortcode_atts( array (
        'type' => 'crm',
        'posts' => 5,
    ), $atts );

    $options = array(
        'post_type' => $args['type'],
        'posts_per_page' => $args['posts'],
    );

    $query = new WP_Query( $options );

    $ch = 0;

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) : $query->the_post(); $ch++;
            get_template_part( 'template-parts/crm-card-home', get_post_format() );
        endwhile;
        wp_reset_postdata();
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'crm-list-home', 'crm_listing_home_shortcode' );

// Shortcode for cases [cases-list posts="3"]
function crm_listing_parameters_shortcode( $atts ) {
    ob_start();

    $args = shortcode_atts( array (
        'type' => 'crm',
        'posts' => 5,
    ), $atts );

    $options = array(
        'post_type' => $args['type'],
        'posts_per_page' => $args['posts'],
        'post__not_in' => array( get_the_ID() )
    );

    $query = new WP_Query( $options );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) : $query->the_post();
            get_template_part( 'template-parts/crm-card', get_post_format() );
        endwhile;
        wp_reset_postdata();
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'crm-list', 'crm_listing_parameters_shortcode' );


// Shortcode for cases [cases-list posts="3"]
//function crm_full_listing_parameters_shortcode( $atts ) {
//    ob_start();
//
//    $args = shortcode_atts( array (
//        'type' => 'crm',
//        'posts' => 10,
//    ), $atts );
//
//    $options = array(
//        'post_type' => $args['type'],
//        'posts_per_page' => $args['posts'],
//    );
//
//    $query = new WP_Query( $options );
//
//    if ( $query->have_posts() ) {
//        while ( $query->have_posts() ) : $query->the_post();
//            get_template_part( 'single-crm', get_post_format() );
//        endwhile;
//        wp_reset_postdata();
//        $myvariable = ob_get_clean();
//        return $myvariable;
//    }
//}
//add_shortcode( 'crm-list-full', 'crm_full_listing_parameters_shortcode' );


// Shortcode for cases [cases-list posts="3"]
function crm_modal_parameters_shortcode( $atts ) {
    ob_start();

    $args = shortcode_atts( array (
        'type' => 'crm',
        'posts' => 10,
    ), $atts );

    $options = array(
        'post_type' => $args['type'],
        'posts_per_page' => $args['posts'],
    );

    $query = new WP_Query( $options );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) : $query->the_post();
            global $post;
            $post_slug = $post->post_name; ?>
            <div id="<?php echo $post_slug ?>" class="daModal da-modal-popup">
                <div class="da-modal-inner crm">
                    <div class="da-modal-content">
                        <?php echo get_template_part( 'single-crm-modal', get_post_format() ); ?>
                    </div>
                </div>
            </div>

            <?php
        endwhile;
        wp_reset_postdata();
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'crm-modal', 'crm_modal_parameters_shortcode' );

?>