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
	
	<div class="header">
		<?php
		if ( is_singular() ) :
			the_title( '<span class="entry-title">', '</span>' );
		else :
			the_title( '<span class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></span>' );
		endif;

		if ( 'post' === get_post_type() ) :
	  endif; 	  
	  // commented, shows category and upload date
	  //romy2_entry_footer();
	  //romy2_posted_on();
	  ?>
	</div><!-- .entry-header -->

	
	
	<div class="content">
		<?php
		romy2_post_thumbnail();
		
		the_content( sprintf(
			wp_kses(
			
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
	</div>
	
</article><!-- #post-<?php the_ID(); ?> -->