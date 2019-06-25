<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package emily-gphotography
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">

		<nav class="navbar navbar-expand-lg navbar-light fixed-top py-5">
			<div class="container nav-area d-flex flex-row">
					
				<a href="<?php echo get_bloginfo('wpurl') ?>" class="d-block d-sm-none">
					<img class="logo ml-4" src="<?php echo get_bloginfo('wpurl')?>/wp-content/themes/emily-gphotography/source/images/logo.png" alt="Emily Netti Logo">
				</a>

				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse pb-sm-3 justify-content-center" id="navbarNav">
						<?php
						wp_nav_menu( array(
							'menu' 					 => 'header-left',
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'navbar-nav',
						) );
						?>
				  </div>

						<a href="<?php echo get_bloginfo('wpurl') ?>" class="d-none d-sm-block">
								<img class="logo" src="<?php echo get_bloginfo('wpurl')?>/wp-content/themes/emily-gphotography/source/images/logo.png" alt="Emily Netti Logo">
						</a>

					<div class="collapse navbar-collapse pb-1 justify-content-center" id="navbarNav">
						<?php
						wp_nav_menu( array(
							'menu' 					 => 'header-right',
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'navbar-nav',
						) );
						?>
				  </div>
			</div>
		</nav>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
