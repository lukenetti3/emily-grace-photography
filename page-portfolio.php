<?php get_header() ?>

<!-- Get Content -->
<?php
$topRow1 = get_field('top_row_image_1');
$topRow2 = get_field('top_row_image_2');
$topRow3 = get_field('top_row_image_3');

$bottomRow1 = get_field('bottom_row_image_1');
$bottomRow2 = get_field('bottom_row_image_2');
$bottomRow3 = get_field('bottom_row_image_3');
?>

<section id="portfolio-section1" class="nav-scroll">
  <div class="container">
    <div class="row justify-content-center pb-4">
      <hr class="r-hrUpdate"><h2 class="workTitle">My Work</h2><hr class="r-hrUpdate">
    </div>
  </div>
    <div class="container img-set-3">
      <div class="row py-4 no-gutters">
        <div class="col-12 col-lg-4 px-2 overlay-div-portfolio">
          <img class="img-fluid w-100 h-100" src="<?php echo $topRow1 ?>">
            <div class="overlay-portfolio d-flex align-items-center justify-content-center">
              <a href="<?php echo get_bloginfo('wpurl') ?>/portfolio-wedding"><p class="overlay-Ptxt text-center">Wedding</p></a>
            </div>
        </div>
        <div class="col-12 col-lg-4 px-2 overlay-div-portfolio">
          <img class="img-fluid w-100 h-100 myWorkImg" src="<?php echo $topRow2 ?>">
          <div class="overlay-portfolio d-flex align-items-center justify-content-center">
            <a href="<?php echo get_bloginfo('wpurl') ?>/portfolio-engagement"><p class="overlay-Ptxt text-center">Engagement</p></a>
          </div>
        </div>
        <div class="col-12 col-lg-4 px-2 overlay-div-portfolio">
          <img class="img-fluid w-100 h-100 myWorkImg" src="<?php echo $topRow3 ?>">
          <div class="overlay-portfolio d-flex align-items-center justify-content-center">
            <a href="<?php echo get_bloginfo('wpurl') ?>/information"><p class="overlay-Ptxt text-center">See More</p></a>
          </div>
        </div>
      </div>
    </div>
</section>


<?php get_footer() ?>
