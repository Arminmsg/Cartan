<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="entry-title">
      <a class="post-link" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
    </h1>
    <div class="entry-meta micro">
      <?php cartan_posted_on(); ?>
    </div><!-- .entry-meta -->
  </header><!-- .entry-header -->

  <?php cartan_featured_image(); ?>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
    <a class="continue" href="<?php the_permalink(); ?>">Read More</a>
  </div><!-- .entry-content -->

</article><!-- #post-## -->