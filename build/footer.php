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
		<div class="row">
			<div class="col-6 text-right pr-5 footer-left">
				<p class="lead">Emily Grace Photography</p>
				<a href="https://www.instagram.com/emilynetti/" target="_blank"><i class="fab fa-instagram fa-2x icons px-3"></i></a>
				<a href="https://www.facebook.com/emilynetti/" id="footer-icon-margin" target="_blank"><i class="fab fa-facebook-f fa-2x icons px-3"></i></a>
			</div>

			<div class="col-6 pl-5 footer-items">
					<p class="lead mb-0">Links</p>
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
