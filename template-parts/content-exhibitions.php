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
	<?php
		$current_year = get_post_meta($post->ID, 'year', true);
		$next_post = get_next_post( true );
		$next_year = !empty( $next_post ) ? get_post_meta( $next_post->ID, 'year', $single = true ) : $current_year;
		$delim_class = (!$next_post || !($next_year == $current_year)) ? 'year-delim' :'no-year-delim';
	?>

	<div class="exhibition-year <?php echo $delim_class;?>">
		<p><?php 
			if( !$next_post || !($next_year == $current_year) ) {
				
				echo $current_year;
			};
			//echo $current_year . " / "  . ( boolval( $next_post ) ? 'true' : 'false' ) . " / " . $next_post->post_title;
			?>
			</p>
	</div>
	<div class="exhibition-location">
		<p><?php echo get_post_meta($post->ID, 'location', true); ?></p>
	</div>

	<div class="exhibition-content">
		<?php
		//romy2_post_thumbnail();
		
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
	<div class="exhibition-header">
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
</article><!-- #post-<?php the_ID(); ?> -->