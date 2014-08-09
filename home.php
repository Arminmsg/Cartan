<?php get_header(); ?>

<div class="row">
  <div class="main-content large-8 columns">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="rounded-box">
				<?php include("content-excerpt.php"); ?>
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


