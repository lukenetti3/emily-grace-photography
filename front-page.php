<?php get_header() ?>

<!-- Grab Content -->
<?php
$image_left = get_field('image_left');
$image_center = get_field('image_center');
$image_right = get_field('image_right');

$heading1 = get_field('heading_1');
$heading2 = get_field('heading_2');
$paragraph1 = get_field('paragraph_1');
$paragraph2 = get_field('paragraph_2');

$testimonialImage = get_field('testimonial_image');
$testimonialText = get_field('testimonial_text');
$testimonialSig = get_field('testimonial_signature');

$carouselImage1 = get_field('carousel_image_1');
$carouselImage2 = get_field('carousel_image_2');
$carouselImage3 = get_field('carousel_image_3');

$step1 = get_field('step_1');
$step2 = get_field('step_2');
$step3 = get_field('step_3');
$step4 = get_field('step_4');
$stepDetail1 = get_field('step_detail_1');
$stepDetail2 = get_field('step_detail_2');
$stepDetail3 = get_field('step_detail_3');
$stepDetail4 = get_field('step_detail_4');
?>


<section id="section-1" class="nav-scroll">
  <div class="container py-5 hero-section">
    <div class="row img-set-3">
      <div class="col-12 col-md-4 box p-4 overlay-div">
          <img class="img-fluid w-100 h-100 wide-block family" src="<?php echo $image_left ?>" alt="two kids">
          <div class="overlay d-flex align-items-center justify-content-center">
            <a href="<?php echo get_bloginfo('wpurl') ?>/information"><p class="overlay-txt text-center">Lifestyle</p></a>
          </div>
      </div>
      <div class="col-12 col-md-4 box px-4 py-md-4 px-md-0 overlay-div d-none d-sm-block">
        <img class="img-fluid w-100 h-100 wide-block" src="<?php echo $image_center ?>" alt="bike">
        <div class="overlay d-flex align-items-center justify-content-center">
          <a href="<?php echo get_bloginfo('wpurl') ?>/contact"><p class="overlay-txt text-center">Contact</p></a>
        </div>
      </div>
      <div class="col-12 col-md-4 box p-4 overlay-div d-none d-sm-block">
        <img class="img-fluid w-100 h-100 bride wide-block" src="<?php echo $image_right ?>" alt="bride">
        <div class="overlay d-flex align-items-center justify-content-center">
          <a href="<?php echo get_bloginfo('wpurl') ?>/information#go-here"><p class="overlay-txt text-center">Brides</p></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="section-2">
  <div class="container-fluid pt-5">
    <div class="row align-items-center">
      <div class="col-12 col-xl-6 bg-beige p-5-xl text-center">
        <hr class="remove r-hr"><h2 class="d-inline px-5"><?php echo $heading1 ?></h2><hr class="r-hr">
        <p class="lead py-4 p-line-height landing-text">
          <?php echo $paragraph1 ?>
         </p>
         <button class="btn btn-outline-primary">
           <a href="<?php echo get_bloginfo('wpurl') ?>/information#go-here">Click Here</a>
         </button>
      </div>
      <div class="col-12 col-xl-6 bg-grey p-5-xl text-center">
        <hr class="remove r-hr"><h2 class="d-inline px-5"><?php echo $heading2 ?></h2><hr class="r-hr">
        <p class="lead py-4 p-line-height landing-text">
          <?php echo $paragraph2 ?>
         </p>
         <button class="btn btn-outline-primary">
           <a href="<?php echo get_bloginfo('wpurl') ?>/information">Click Here</a>
         </button>
      </div>
    </div>
  </div>
</section>

<section id="section-3">
    <div class="grid-container">
      <div class="grid-item header-testimonial">
        <h2>Testimonial</h2>
      </div>
      <div class="grid-item box-img">
        <img class="" src="<?php echo $testimonialImage ?>" alt="testimonial image">
      </div>
      <div class="grid-item box-text text-center">
          <p class="quote">"</p>
          <p class="lead p-line-height"><?php echo $testimonialText ?></p>
          <p class="lead p-line-height">
            -<?php echo $testimonialSig ?>
          </p>
      </div>
    </div>
</section>

<section id="section-4">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block wide-block" src="<?php echo $carouselImage1 ?>" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block wide-block" src="<?php echo $carouselImage2 ?>" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block wide-block" src="<?php echo $carouselImage3 ?>" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<section id="section-5">
  <div class="container">
    <h2 class="text-center pb-5">Photography Process</h2>
    <hr class="full-width">
    <div class="row pb-5 photo-process">
      <div class="col-12 col-md-6 col-lg-3 process pl-5">
        <span class="numbers">1. </span><h5 class="d-inline"><?php echo $step1 ?></h5>
        <p class="process-text ml-4 lt-font"><?php echo $stepDetail1 ?></p>
      </div>
      <div class="col-12 col-md-6 col-lg-3 process pl-5">
        <span class="numbers">2. </span><h5 class="d-inline"><?php echo $step2 ?></h5>
        <p class="process-text ml-4 lt-font"><?php echo $stepDetail2 ?></p>
      </div>
      <div class="col-12 col-md-6 col-lg-3 process pl-5">
        <span class="numbers">3. </span><h5 class="d-inline"><?php echo $step3 ?></h5>
        <p class="process-text ml-4 lt-font"><?php echo $stepDetail3 ?></p>
      </div>
      <div class="col-12 col-md-6 col-lg-3 process pl-5">
        <span class="numbers">4. </span><h5 class="d-inline"><?php echo $step4 ?></h5>
        <p class="process-text ml-4 lt-font"><?php echo $stepDetail4 ?></p>
      </div>
    </div>
  </div>
</section>

<section id="section-6">
  <div class="container d-flex justify-content-center">
    <div>
      <button class="btn btn-outline-primary cta-button">
        <a href="<?php echo get_bloginfo('wpurl') ?>/portfolio">See The Portfolio</a>
      </button>
    </div>
  </div>
</section>


<?php get_footer() ?>
