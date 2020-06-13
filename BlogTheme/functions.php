<?php

add_theme_support( 'post-thumbnails' );

add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

add_action('wp_enqueue_scripts', 'wpdocs_custom_excerpt_length');

/*function wpdocs_excerpt_more( $more ) {
    return '[.....]';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
add_action('wp_enqueue_scripts', 'wpdocs_excerpt_more');*/


//Adds the read more instead of the excerpt
function wpdocs_excerpt_more2( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( '   ...Read More', 'textdomain' )
        );
    }
 
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more2' );
add_action('wp_enqueue_scripts', 'wpdocs_excerpt_more2');
