<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package romy2
 */

$cat_array = get_the_category();
$cat_name = $cat_array[0]->cat_name;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-thumbnail">
		<?php romy2_post_thumbnail(); ?>
	</div>
	
	<div class="entry-content">
	
		<header class="entry-header">
			<?php
			
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					if( $cat_name == 'works' ) {
					?>	
						 <ul class="post-meta">
						   <li><?php echo get_post_meta($post->ID, 'dimensions', true); ?></li>
						   <li><?php echo get_post_meta($post->ID, 'material', true); ?></li>
						   <li><?php echo get_post_meta($post->ID, 'year', true); ?></li>
						 </ul>
					<?php
					};
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->	
	
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'romy2' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
		

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'romy2' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<!--<footer class="entry-footer">
		<?php romy2_entry_footer(); ?>
	</footer>--><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
