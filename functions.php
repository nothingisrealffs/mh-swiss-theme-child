<?php
/**
 * Child theme functions for mh-swiss-theme-child
 */

// enqueue parent and child stylesheets
function mh_child_enqueue_styles() {
    wp_enqueue_style(
        'mh-swiss-parent-style',
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style(
        'mh-swiss-child-style',
        get_stylesheet_uri(),
        array( 'mh-swiss-parent-style' ),
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'mh_child_enqueue_styles' );


// register child theme sidebar widget area
function mh_child_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Child Sidebar', 'mh-swiss-theme-child' ),
        'id'            => 'child-sidebar-1',
        'description'   => __( 'Widget area added by child theme.', 'mh-swiss-theme-child' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mh_child_widgets_init' );


// reading time function
function mh_reading_time() {
    $content   = get_post_field( 'post_content', get_the_ID() );
    $word_count = str_word_count( strip_tags( $content ) );
    $minutes   = ceil( $word_count / 200 );
    return $minutes . ' min read';
}