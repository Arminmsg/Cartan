<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Cartan
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header class="site-header" role="banner">
		<nav class="main-nav">
			<div class="row">
				<div class="columns">

						<h1 class="main-nav__title main-nav_height left epsilon"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php wp_nav_menu( array( 
						'theme_location' => 'primary',
						'fallback_cb' => 'false',
						'container_class' => 'main-nav_toggle_js nav-clearing',
						'menu_class' => 'main-nav__list',
						) ); ?>

				</div>
			</div>
		</nav>
		<div class="masthead" style="
			background-image: url(<?php header_image() ?>);
			color:#<?php echo get_header_textcolor() ?>;
			">
		  <div class="row">
		    <div class="columns">
		      <!--<h2 class="masthead__tagline" style="">
		        <?php bloginfo( 'description') ?>
		      </h2> -->
		      <h2 class="masthead__location" style="font-weight: 700;">
		      	<?php include("breadcrumbs.php"); ?>
		      </h2> 
		    </div>
		  </div>
		</div>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
