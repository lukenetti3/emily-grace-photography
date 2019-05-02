<?php get_header() ?>

<!-- Grab Images -->
<?php
$image_left = get_field('image_left');
$image_center = get_field('image_center');
$image_right = get_field('image_right');
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
        <hr class="remove"><h2 class="d-inline px-5">Bride?</h2><hr>
        <p class="lead py-4 p-line-height">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
           sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
           aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
           duo dolores et
           nonumy eirmod tempor
         </p>
         <button class="btn btn-outline-primary">
           <a href="#">Click Here</a>
         </button>
      </div>
      <div class="col-12 col-xl-6 bg-grey p-5-xl text-center">
        <hr class="remove"><h2 class="d-inline px-5">Family?</h2><hr>
        <p class="lead py-4 p-line-height">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
           sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
           aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
           duo dolores et
           nonumy eirmod tempor
         </p>
         <button class="btn btn-outline-primary">
           <a href="#">Click Here</a>
         </button>
      </div>

    </div>
  </div>
</section>


<?php get_footer() ?>
