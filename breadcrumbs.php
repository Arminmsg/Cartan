<!--
  Adds Breadcrumbs to the Header
  -->


<?php if ( is_front_page() && is_home() ) : ?>
  Blog
<?php elseif ( is_front_page() ) : ?>
  &nbsp;
<?php elseif ( is_home() ) : ?>
  Blog
<?php elseif ( is_single() ) : ?>
  Blog > <?php single_post_title() ?>
<?php elseif ( is_category() ) : ?>
  Blog > <?php single_cat_title(); ?>
<?php elseif ( is_tag() ) : ?>
  Blog > <?php single_tag_title(); ?>

<?php elseif ( is_author() ) : ?>
    <?php
      global $post;
      $author_id=$post->post_author;
    ?>
    Blog > Author: <?php the_author_meta( 'user_nicename', $author_id ); ?>

<?php elseif ( is_day() ) : ?>
  Blog > Date: <?php the_time('M j, Y') ?>
<?php elseif ( is_month() ) : ?>
  Blog > Month: <?php the_time('F Y') ?>
<?php elseif ( is_year() ) : ?>
  Blog > Year: <?php the_time('Y') ?>
<?php elseif ( is_404() ) : ?>
  &nbsp;
<?php elseif ( is_search() ) : ?>
  Blog > Search
<?php else : ?>
  Blog > Archives
<?php endif; ?>