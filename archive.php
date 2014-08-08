<?php
/**
 * The template for displaying archive pages.
 *
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
					include("content-excerpt.php");
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
	
	<aside class="large-4 columns">
		<?php get_sidebar(); ?>
	</aside>
</div>

<?php get_footer(); ?>
