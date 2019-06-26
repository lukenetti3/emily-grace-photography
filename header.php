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
			<div class="nav-area d-flex flex-row container">
				<div class="container text-center d-block d-lg-none d-xl-none">
					<a href="<?php echo get_bloginfo('wpurl') ?>">
						<img class="logo" src="<?php echo get_bloginfo('wpurl')?>/wp-content/themes/emily-gphotography/source/images/logo.png" alt="Emily Netti Logo">
					</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse pb-sm-3 justify-content-center align-items-center" id="navbarNav">
					<?php
					wp_nav_menu( array(
						'menu' 					 => 'header-left',
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu mx-auto text-center',
						'menu_class'     => 'navbar-nav',
						'add_li_class'	 => 'text-center',
					) );
					?>
				</div>
				<a href="<?php echo get_bloginfo('wpurl') ?>" class="justify-content-center d-none d-lg-block d-xl-block">
					<img class="logo" src="<?php echo get_bloginfo('wpurl')?>/wp-content/themes/emily-gphotography/source/images/logo.png" alt="Emily Netti Logo">
				</a>
				<div class="collapse navbar-collapse pb-1 justify-content-center align-items-center" id="navbarNav">
					<?php
					wp_nav_menu( array(
						'menu' 					 => 'header-right',
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu mx-auto text-center',
						'menu_class'     => 'navbar-nav',
						'add_li_class'	 => 'text-center',
					) );
					?>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
