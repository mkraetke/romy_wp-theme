<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package romy2
 */

get_header();
$cat_array = get_the_category();
$cat_name = $cat_array[0]->cat_name;
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-category <?php echo $cat_name?>">

		<?php
		while ( have_posts() ) :
			if( $cat_name == 'works') {
				
				?>
					<div class="next-post"><?php next_post_link('%link', false, true); ?></div>
				<?php 
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
				?>
					<div class="previous-post"><?php previous_post_link('%link', false, true); ?> </div>
				<?php
				
			} else {
				?>
					<div class="next-post"><?php next_post_link('%link', false, true); ?></div>
				<?php
				// default, e.g. exhibitions, no other categories yet
				the_post();
				get_template_part( 'template-parts/content-single' );
				?>
					<div class="previous-post"><?php previous_post_link('%link', false, true); ?> </div>
				<?php
				
			}
  		
		
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
