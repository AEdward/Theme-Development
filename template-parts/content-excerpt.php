
<?php
/**
 * Template part for displaying posts.
 *
 * Please browse readme.txt for credits and forking information
 * @package ocean_wp_child_by_anahom
 */

?>
<article id="post-<?php the_ID(); ?>"  <?php post_class('post-content'); ?>>
	<div class="row post-feed-wrapper">
		<!--
		

		<?php // if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-banner">
			<?php // echo __( 'Featured', 'ocean_wp_child_by_anahom' ); ?>
		</div>
	<?php // endif; ?>
-->

<?php if ( has_post_thumbnail() ) : ?>
	<div class="col-md-12 post-thumbnail-wrap">
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<span class="img-overlay"></span>

			<?php  if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="featured-button">
				<img src="<?php echo esc_html(get_template_directory_uri()); ?>/images/star.png" />
			</span>
		<?php else : ?>
		<span class="readmore-button">
			+
		</span>
	<?php  endif; ?>

	<div class="post-thumbnail" style="background-image: url('<?php echo esc_url($thumb['0']);?>')"></div>

	<h2 class="entry-title">
		<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
	</h2>
	<h5 class="entry-date"><?php ocean_wp_child_by_anahom_posted_on(); ?></h5>
</a>
</div>


<?php else : ?>

	<div class="col-md-12 post-thumbnail-wrap no-img">
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<?php  if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="featured-button">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/star.png" />
			</span>
		<?php else : ?>
		<span class="readmore-button">
			+
		</span>
	<?php  endif; ?>
	<h2 class="entry-title">
		<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
	</h2>
	<h5 class="entry-date"><?php ocean_wp_child_by_anahom_posted_on(); ?></h5>
</a>
</div>


<?php endif; ?>

</article><!-- #post-## -->
