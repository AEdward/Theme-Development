<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ocean_wp_child_by_anahom
 */

?>

	
    <!-- #content -->
</div>
  <footer id="colophon" class="site-footer white" >
    <div id="footer-sidebar" class="row secondary">
        <div class="col-md-3" id="footer-sidebar1">
        <?php
        if(is_active_sidebar('footer-sidebar-1')){
        dynamic_sidebar('footer-sidebar-1');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar2">
        <?php
        if(is_active_sidebar('footer-sidebar-2')){
        dynamic_sidebar('footer-sidebar-2');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar3">
        <?php
        if(is_active_sidebar('footer-sidebar-3')){
        dynamic_sidebar('footer-sidebar-3');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar4">
        <?php
        if(is_active_sidebar('footer-sidebar-4')){
        dynamic_sidebar('footer-sidebar-4');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar-5">
        <?php
        if(is_active_sidebar('footer-sidebar-5')){
        dynamic_sidebar('footer-sidebar-5');
        }
        ?>
        </div>
      </div>



		<div class="site-info col-md-12">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ocean_wp_child_by_anahom' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ocean_wp_child_by_anahom' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ocean_wp_child_by_anahom' ), 'ocean_wp_child_by_anahom', '<a href="#">ocean_wp_child_by_anahom</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
