<?php get_header();

$images = get_field('gallery_wedding');

include( locate_template( 'template-parts/content-page.php', false, false ) );

?>

<?php get_footer() ?>
