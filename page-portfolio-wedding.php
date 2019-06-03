<?php get_header() ?>

<?php

$images = get_field('gallery_wedding');

if( $images ): ?>
    <section class="portfolio-gallery nav-scroll">
      <div class="container">
        <div class="gallery">
          <div class="mb-3">
            <?php foreach( $images as $image ): ?>

              <?php

              $content .= '<a href="'. $image['url'] .'">';
              $content .= '<img class="img-fluid" src="'. $image['url'] .'" >';
              $content .= '</a>';

              if ( function_exists('slb_activate') ){
                $content = slb_activate($content);
              }

              endforeach;

              echo $content ?>

          </div>
        </div>
      </div>
    </section>

<?php endif; ?>

<?php get_footer() ?>
