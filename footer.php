<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Cartan
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer micro" role="contentinfo">
    <div class="row">
     <div class="site-info columns">
      <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'cartan' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'cartan' ), 'WordPress' ); ?></a>
      <span class="sep"> | </span>
      <?php printf( __( 'Theme: %1$s by %2$s.', 'cartan' ), 'Cartan', '<a href="http://arminmesic.com/" rel="designer">Armin Mesic</a>' ); ?>
     </div><!-- .site-info --> 
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>


</script>
</body>
</html>
