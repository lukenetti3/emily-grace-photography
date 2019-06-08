<?php get_header();

// $images = get_field('gallery_engagement');
//
// include( locate_template( 'template-parts/content-page.php', false, false ) );
the_post(); ?>

<section>
  <?php the_content(); ?>
</section>


<?php get_footer() ?>
