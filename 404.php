<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Cartan
 */

get_header(); ?>

<div class="row">
  <div class="main-content large-8 columns">

			<section class="error-404">
				<div class="rounded-box not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'cartan' ); ?></h1>
				</header><!-- .page-header -->


					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'cartan' ); ?></p>

					<?php get_search_form(); ?>
				</div>

				<div class="rounded-box">
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( cartan_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php _e( 'Most Used Categories', 'cartan' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'cartan' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
				</div>

			</section><!-- .error-404 -->

		</div><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->
<?php get_footer(); ?>
