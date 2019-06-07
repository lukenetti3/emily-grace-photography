<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emily-gphotography
 */

?>

<?php
if( $images ): ?>
    <section class="portfolio-gallery nav-scroll">
      <div class="container">
        <div class="gallery">

            <?php foreach( $images as $image ): ?>

              <?php

							unset($content);

              $content .= '<a href="'. $image['url'] .'">';
              $content .= '<img class="img-fluid" src="'. $image['url'] .'" >';
              $content .= '</a>';
              if ( function_exists('slb_activate') ){
                $content = slb_activate($content);
              }

							echo $content;

              endforeach;

							?>

        </div>
      </div>
    </section>

<?php endif; ?>
