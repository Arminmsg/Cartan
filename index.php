<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cartan
 */

get_header(); ?>

<div class="row">
  <div class="main-content large-8 columns">
  	
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="rounded-box">
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>
				</div>

			<?php endwhile; ?>

			<?php cartan_paging_nav(); ?>

		<?php else : ?>

			<div class="rounded-box">
				<?php get_template_part( 'content', 'none' ); ?>
			</div>

		<?php endif; ?>

	</div>
	

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
