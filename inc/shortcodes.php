<?php

// Add theme url shortcode
function theme_uri_shortcode( $attrs = array (), $content = '' )
{
    $theme_uri = is_child_theme()
        ? get_stylesheet_directory_uri()
        : get_template_directory_uri();
    return trailingslashit( $theme_uri );
}
add_shortcode('theme_url', 'theme_uri_shortcode' );

add_filter( 'widget_text', 'do_shortcode' );

?>