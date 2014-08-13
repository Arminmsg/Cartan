<form role="search" method="get" id="searchform" class="searchform" action="<?php esc_url( home_url( '/' )); ?>">
  <div class="searchform">
    <!--<h4 class="widget-title" ><label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?>Search</label></h4> -->
    <input type="text" value="<?php get_search_query(); ?>" name="s" id="s" class="search" placeholder="Search"/>
    <input type="submit" class="searchsubmit" value="" />
  </div>
</form>