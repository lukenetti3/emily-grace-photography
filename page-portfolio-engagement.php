<?php get_header();

$images = get_field('gallery_engagement');

include( locate_template( 'template-parts/content-page.php', false, false ) );

get_footer() ?>
