<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ocean_wp_child_by_anahom_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'right Sidebar', 'ocean_wp_child_by_anahom' ),
		'id'            => 'righ-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'ocean_wp_child_by_anahom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ocean_wp_child_by_anahom_widgets_init' );
?>