<?php
/**
 * The template for displaying search results pages.
 *
 * @package Cartan
 */

get_header(); ?>

<div class="row">
  <div class="main-content large-8 columns">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'cartan' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="rounded-box">
					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'content', 'search' );
					?>
				</div>

			<?php endwhile; ?>

			<?php cartan_paging_nav(); ?>

		<?php else : ?>

			<div class="rounded-box">
				<?php get_template_part( 'content', 'none' ); ?>
			</div>

		<?php endif; ?>

	</div><!-- #main -->


<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
