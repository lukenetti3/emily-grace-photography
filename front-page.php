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
?>


<section id="section-1">
  <div class="container py-5 hero-section">
    <div class="row img-set-3">
      <div class="col-12 col-md-4 box p-4">
        <img class="img-fluid w-100 h-100" src="<?php echo $image_left ?>" alt="two kids">
      </div>
      <div class="col-12 col-md-4 box px-4 py-md-4 px-md-0">
        <img class="img-fluid w-100 h-100" src="<?php echo $image_center ?>" alt="bike">
      </div>
      <div class="col-12 col-md-4 box p-4">
        <img class="img-fluid w-100 h-100" src="<?php echo $image_right ?>" alt="bride">
      </div>
    </div>
  </div>
</section>

<section id="section-2">
  <div class="container-fluid py-5">
    <div class="row align-items-center">
      <div class="col-12 col-xl-6 bg-beige p-5-xl text-center">
        <hr class="remove"><h2 class="d-inline px-5"><?php echo $heading1 ?></h2><hr>
        <p class="lead py-4 p-line-height">
          <?php echo $paragraph1 ?>
         </p>
         <button class="btn btn-outline-primary">
           <a href="#">Click Here</a>
         </button>
      </div>
      <div class="col-12 col-xl-6 bg-grey p-5-xl text-center">
        <hr class="remove"><h2 class="d-inline px-5"><?php echo $heading2 ?></h2><hr>
        <p class="lead py-4 p-line-height">
          <?php echo $paragraph2 ?>
         </p>
         <button class="btn btn-outline-primary">
           <a href="#">Click Here</a>
         </button>
      </div>
    </div>
  </div>
</section>

<section id="section-3">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <img class="img-fluid w-100 h-100" src="<?php echo $testimonialImage ?>" alt="testimonial image">
      </div>
      <div class="col-12 col-md-6">
        <span class="offset-block"></span>
      </div>
    </div>
  </div>
</section>


<?php get_footer() ?>
