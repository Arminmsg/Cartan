<?php get_header(); ?>
home.php 

<div class="row">
  <div class="main-content large-8 columns">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('rounded-box'); ?>>
	
					<header class="entry-header">
						<img src="<?php cartan_featured_image_url(); ?>" alt="">
	
						<h1 class="entry-title">
							<a class="post-link" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
						</h1>
						<div class="byline">
							
								<div class="icon author">By <a href='<?php the_author_meta( 'user_url'); ?>'> <?php the_author() ?></a> </div>
								<?php if( !in_category( 'Uncategorized') ): ?>
				        			<div class="icon category">in <?php the_category(',');?></div>
								<?php endif; ?>
								<div class="icon time">on <a href="<?php the_permalink() ?>"><?php the_time( 'F j, Y'); ?></a></div>
							
						</div>
					</header><!-- .entry-header -->
	
					<div class="entry-content">
						<?php the_excerpt(); ?>
						<a class="continue" href="<?php the_permalink(); ?>">Read More</a>
					</div><!-- .entry-content -->
	
				</article><!-- #post-## -->
			
			<?php endwhile; ?>

			<?php cartan_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>


	</div>
	
	<aside class="large-4 columns">
		<?php get_sidebar(); ?>
	</aside>
</div>

<?php get_footer(); ?>


