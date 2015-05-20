<?php 

if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
}


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Archive Page',
		'id'            => 'arichive_content',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150 );


/**
 * Add stylesheet to the page
 */
function safely_add_stylesheet() {
    wp_enqueue_style( 'snazzy-archives', plugins_url('snazzy-archives.css', __FILE__) );
}

add_action( 'wp_enqueue_scripts', 'safely_add_stylesheet' );



?>
