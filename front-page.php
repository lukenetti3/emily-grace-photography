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

$step1Img = get_field('step_1_image');
$step2Img = get_field('step_2_image');
$step3Img = get_field('step_3_image');
$step1Text = get_field('step_1_text');
$step2Text = get_field('step_2_text');
$step3Text = get_field('step_3_text');

?>


<section id="section-1" class="nav-scroll pt-5">
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
         <button class="p-2 mb-4 cta-button">
           <a href="<?php echo get_bloginfo('wpurl') ?>/information#go-here">Click Here</a>
         </button>
      </div>
      <div class="col-12 col-xl-6 bg-grey p-5-xl text-center">
        <hr class="remove r-hr"><h2 class="d-inline px-5"><?php echo $heading2 ?></h2><hr class="r-hr">
        <p class="lead py-4 p-line-height landing-text">
          <?php echo $paragraph2 ?>
         </p>
         <button class="p-2 mb-4 cta-button">
           <a href="<?php echo get_bloginfo('wpurl') ?>/information">Click Here</a>
         </button>
      </div>
    </div>
  </div>
</section>

<section id="section-3">
    <div class="grid-container">
      <div class="grid-item header-testimonial">
        <h2 class="appear">Testimonial</h2>
      </div>
      <div class="grid-item box-img">
        <img class="" src="<?php echo $testimonialImage ?>" alt="testimonial image">
      </div>
      <div class="grid-item box-text text-center">
          <p class="quote appear">"</p>
          <p class="lead p-line-height appear"><?php echo $testimonialText ?></p>
          <p class="lead p-line-height appear">
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

<section id="section-5" class="pb-5">
  <div class="container container-5">
    <div class="rotator rotate-1 show">
      <div class="row">
        <div class="col-12 col-lg-6 pl-5 num-pos num-pos">
          <div class="rotate"><span class="pr-4 special-font">step one</span></div><h2 class="pb-3">Photography Process</h2>
          <p class="lt-font about-line-height pb-4"><?php echo $step1Text ?></p>
          <div class="button-center">
            <button class="p-2 mb-4 cta-button">Process<i class="pl-2 fas fa-arrow-right"></i></button>
          </div>
        </div>
        <div class="col-12 col-lg-6 order-lg-first text-center steps-img">
          <img class="img-fluid w-100 h-100" src="<?php echo $step1Img ?>" alt="">
        </div>
      </div>
    </div>
    <div class="rotator rotate-2">
      <div class="row">
        <div class="col-12 col-lg-6 pl-5 num-pos">
          <div class="rotate"><span class="pr-4 special-font">step two</span></div><h2 class="pb-3">Photography Process</h2>
          <p class="lt-font about-line-height pb-4"><?php echo $step2Text ?></p>
          <div class="button-center">
            <button class="p-2 mb-4 cta-button">Process<i class="pl-2 fas fa-arrow-right"></i></button>
          </div>
        </div>
        <div class="col-12 col-lg-6 order-lg-first text-center steps-img">
          <img class="img-fluid w-100 h-100" src="<?php echo $step2Img ?>" alt="">
        </div>
      </div>
    </div>
    <div class="rotator rotate-3">
      <div class="row">
        <div class="col-12 col-lg-6 pl-5 num-pos">
          <div class="rotate"><span class="pr-4 special-font">step three</span></div><h2 class="pb-3">Photography Process</h2>
          <p class="lt-font about-line-height pb-4"><?php echo $step3Text ?></p>
          <div class="button-center">
            <button class="p-2 mb-4 cta-button">Process<i class="pl-2 fas fa-arrow-right"></i></button>
          </div>
        </div>
        <div class="col-12 col-lg-6 order-lg-first text-center steps-img">
          <img class="img-fluid w-100 h-100" src="<?php echo $step3Img ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer() ?>
