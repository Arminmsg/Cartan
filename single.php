<?php
/**
 * The template for displaying all single posts.
 *
 * @package Cartan
 */

get_header(); ?>

	<div class="row">
  	<div class="main-content large-8 columns">
  		<div class="rounded-box">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>


		</div>
	</div>
	
	<aside class="large-4 columns">
		<?php get_sidebar(); ?>
	</aside>
</div>

<?php get_footer(); ?>