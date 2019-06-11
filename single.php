<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package romy2
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-works site-category">

		<?php
		while ( have_posts() ) :
		
  		?>
  		<div class="next-post"><?php next_post_link('%link', false, true); ?></div>
  		<?php

		
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			/*if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			*/
			
  		?>
  		<div class="previous-post"><?php previous_post_link('%link', false, true); ?> </div>
  		<?php

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
