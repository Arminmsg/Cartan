<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php cartan_featured_image(); ?>
  <header class="entry-header">
    

    <h1 class="entry-title">
      <a class="post-link" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
    </h1>
    <div class="post-byline">
      
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