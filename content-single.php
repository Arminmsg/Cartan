<?php
/**
 * @package Cartan
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	  <h1 class="entry-title">
	    <?php the_title(); ?>
	  </h1>
	  <div class="entry-meta micro">
	    <?php cartan_posted_on(); ?>
	  </div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php cartan_featured_image(); ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'cartan' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'cartan' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
