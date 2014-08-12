<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Cartan
 */

get_header(); ?>

<div class="row">
  <div class="main-content large-8 columns">

			<?php while ( have_posts() ) : the_post(); ?>

			<div class="rounded-box">
				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			</div> <!-- .rounded-box -->
			<?php endwhile; // end of the loop. ?>

		</div><!-- #main -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
