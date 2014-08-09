<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php cartan_featured_image(); ?>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    <div class="entry-meta">
      <?php cartan_posted_on(); ?>
    </div><!-- .entry-meta -->
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_excerpt(); ?>
    <a class="continue" href="<?php the_permalink(); ?>">Read More</a>
  </div><!-- .entry-content -->

</article><!-- #post-## -->