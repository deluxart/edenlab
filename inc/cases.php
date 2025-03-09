<?php
add_action( 'init', 'eden_cases_func' );

function eden_cases_func() {
    $labels = array(
        'name' => 'Cases',
        'singular_name' => 'Cases',
        'add_new' => 'Add cases',
        'add_new_item' => 'Add new cases',
        'edit_item' => 'Edit cases',
        'new_item' => 'New cases',
        'all_items' => 'All cases',
        'search_items' => 'Cases search',
        'menu_name' => 'Cases'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'menu_position' => 5,
        'supports' => array( 'title', 'revisions'),
        'rewrite'           => array(
            'slug' => 'case/%case%',
            'with_front' => false
        ),
    );
    register_post_type('case', $args);

    register_taxonomy( 'case', 'case', array(
            'hierarchical' => true,
            'label' => 'Categories',
            'query_var' => true,
            'rewrite' => array('slug' => 'case', 'with_front' => false),
        )
    );
}

function wpa_case_post_link( $post_link, $id = 0 ){
    $post = get_post($id);
    if ( is_object( $post ) ){
        $terms = wp_get_object_terms( $post->ID, 'case' );
        if( $terms ){
            return str_replace( '%case%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;
}
add_filter( 'post_type_link', 'wpa_case_post_link', 1, 3 );

// Shortcode for cases [cases-list posts="3"]
function cases_listing_parameters_shortcode( $atts ) {
    ob_start();

    $args = shortcode_atts( array (
        'type' => 'case',
        'posts' => '',
        'cats' => '',
    ), $atts );

    $options = array(
        'post_type' => $args['type'],
        'posts_per_page' => $args['posts'],
        'tax_query' => array(
            array(
                'taxonomy' => 'case',
                'field'    => 'slug',
                'terms' => explode(',', $args['cats']),
//                'operator' => 'NOT IN',
                'operator' => 'IN',
            )
        ),

    );

    $query = new WP_Query( $options );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) : $query->the_post();
            get_template_part( 'template-parts/case-card', get_post_format() );
        endwhile;
        wp_reset_postdata();
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'cases-list', 'cases_listing_parameters_shortcode' );

// Shortcode for cases [cases-list posts="3"]
function cases_listing_byid_parameters_shortcode( $atts ) {
    ob_start();

    $args = shortcode_atts( array (
        'type' => 'case',
        'posts' => '',
        'cats' => '',
        'ids' => array(),
    ), $atts );

    $options = array(
        'post_type' => $args['type'],
        'posts_per_page' => $args['posts'],
        'post__in' => explode(',', $args['ids']),
        'tax_query' => array(
            array(
                'taxonomy' => 'case',
                'field'    => 'slug',
                'terms' => explode(',', $args['cats']),
//                'operator' => 'NOT IN',
                'operator' => 'IN',
            )
        ),

    );

    $query = new WP_Query( $options );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) : $query->the_post();
            get_template_part( 'template-parts/case-card', get_post_format() );
        endwhile;
        wp_reset_postdata();
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'cases-list-ids', 'cases_listing_byid_parameters_shortcode' );



// Shortcode for cases [cases-list-related posts="3"]
function cases_related_listing_parameters_shortcode( $atts ) {
    ob_start();

    $args = shortcode_atts( array (
        'type' => 'case',
        'posts' => 3,
    ), $atts );

    $options = array(
        'post_type' => $args['type'],
        'posts_per_page' => $args['posts'],
        'post__not_in' => array( get_the_ID() ),
    );

    $query = new WP_Query( $options );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) : $query->the_post();
            get_template_part( 'template-parts/case-card', get_post_format() );
        endwhile;
        wp_reset_postdata();
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'cases-list-related', 'cases_related_listing_parameters_shortcode' );

// Shortcode for cases [cases-list-home posts="3"]
function cases_listing_home_shortcode( $atts ) {
    ob_start();

    $args = shortcode_atts( array (
        'type' => 'case',
        'posts' => 3,
        'cats' => '',
    ), $atts );

    $options = array(
        'post_type' => $args['type'],
        'posts_per_page' => $args['posts'],
        'tax_query' => array(
            array(
                'taxonomy' => 'case',
                'field'    => 'slug',
                'terms' => explode(',', $args['cats']),
                'operator' => 'IN',
            )
        ),
    );

    $query = new WP_Query( $options );

//    $ch = 0;

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) : $query->the_post();
            get_template_part( 'template-parts/case-card-home', get_post_format() );
        endwhile;

        wp_reset_postdata();
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'cases-list-home', 'cases_listing_home_shortcode' );

// Shortcode for cases [cases-list-nav posts="3"]
function cases_listing_nav_shortcode( $atts ) {
    ob_start();

    $args = shortcode_atts( array (
        'type' => 'case',
        'posts' => 5,
        'cats' => '',
    ), $atts );

    $options = array(
        'post_type' => $args['type'],
        'posts_per_page' => $args['posts'],
        'tax_query' => array(
            array(
                'taxonomy' => 'case',
                'field'    => 'slug',
                'terms' => explode(',', $args['cats']),
                'operator' => 'IN',
            )
        ),
    );

    $query = new WP_Query( $options );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) : $query->the_post(); ?>
            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
            <?php
        endwhile;
        wp_reset_postdata();
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'cases-list-nav', 'cases_listing_nav_shortcode' );



// UPDATE 2025
function case_reviews_shortcode( $atts ) {
    ob_start();

    $args = shortcode_atts( array (
        'type'  => 'case',
        'posts' => 3,
        'cats'  => '',
    ), $atts );

    $options = array(
        'post_type'      => $args['type'],
        'posts_per_page' => $args['posts'],
        'tax_query'      => array(
            array(
                'taxonomy' => 'case',
                'field'    => 'slug',
                'terms'    => explode(',', $args['cats']),
                'operator' => 'IN',
            )
        ),
    );

    $query = new WP_Query( $options );

    if ( $query->have_posts() ) {
        echo '<div class="case-reviews">';
          echo '<div class="container">';
            echo '<div class="case-reviews__cards">';
              while ( $query->have_posts() ) : $query->the_post();
                  get_template_part( 'template-parts/case-card-review', get_post_format() );
              endwhile;
            echo '</div>';
          echo '</div>';
        echo '</div>'; // .case-reviews

        wp_reset_postdata();
    }

    return ob_get_clean();
}
add_shortcode( 'case-reviews', 'case_reviews_shortcode' );



?>