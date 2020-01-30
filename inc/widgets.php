<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ocean_wp_child_by_anahom_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ocean_wp_child_by_anahom' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ocean_wp_child_by_anahom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="footer-widget-title">',
        'after_title' => '</h3>',
        ) );
    register_sidebar( array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="footer-widget-title">',
        'after_title' => '</h3>',
            ) );
    register_sidebar( array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-sidebar-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="footer-widget-title">',
        'after_title' => '</h3>',
            ) );
        
    register_sidebar( array(
        'name' => 'Footer Sidebar 4',
        'id' => 'footer-sidebar-4',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="footer-widget-title">',
        'after_title' => '</h3>',
            ) );
  
}
add_action( 'widgets_init', 'ocean_wp_child_by_anahom_widgets_init' );
?>

