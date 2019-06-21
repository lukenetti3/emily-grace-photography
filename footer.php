<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package emily-gphotography
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer bg-beige">


	<div class="site-footer container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-3 text-center">
				<p class="lead text-uppercase">Booking</p>
				<p class="lt-font"><em>inquire and say hello</em></p>
			</div>
			<div class="col-12 col-lg-6 px-5 center-sec text-center">
				<p class="lt-font text-uppercase">wedding and lifestyle photography, friend to my couples, based in syracuse, new york</p>
				<a href="https://www.instagram.com/emilynetti/" target="_blank"><i class="fab fa-instagram fa-2x icons px-3"></i></a>
				<a href="https://www.facebook.com/emilynetti/" id="footer-icon-margin" target="_blank"><i class="fab fa-facebook-f fa-2x icons px-3"></i></a>
			</div>

			<div class="col-12 col-lg-3 text-center">
						<?php
						wp_nav_menu( array(
							'menu' 					 => 'footer',
							'menu_id'        => 'secondary-menu',
							'menu_class'     => 'footer-menu',
						) );
						?>
			</div>
		 </div>
		</div>
	 </div>
	</div><!-- .site-info -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
