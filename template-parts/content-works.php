<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package romy2
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	
	<?php romy2_post_thumbnail(); ?>

	<div class="entry-content">
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
  <div class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<span class="entry-title">', '</span>' );
		else :
			the_title( '<span class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></span>' );
		endif;

		if ( 'post' === get_post_type() ) :
	  endif; 
	  ?>
	  <ul class="post-meta">
	    <li><?php echo get_post_meta($post->ID, 'dimensions', true); ?></li>
	    <li><?php echo get_post_meta($post->ID, 'material', true); ?></li>
	    <li><?php echo get_post_meta($post->ID, 'year', true); ?></li>
	  </ul>
	  <?php
	  
	  
	  
	  // commented, shows category and upload date
	  //romy2_entry_footer();
	  //romy2_posted_on();
	  ?>
	</div><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->