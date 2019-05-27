<?php get_header() ?>

<!-- Grab Content -->
<?php
$aboutImage = get_field('image');
$aboutTxt = get_field('text');

$journeyPL = get_field('paragraph_left');
$journeyPR = get_field('paragraph_right');
?>

<section id="about-section1" class="nav-scroll">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 order-lg-2">
        <h2>About Me</h2>
        <div class="row">
          <div class="col-12">
            <p class="lead p-line-height"><?php echo $aboutTxt ?></p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 order-lg-1">
        <div class="overlay-about"></div>
        <img class="img-fluid w-75 h-85" src="<?php echo $aboutImage ?>" alt="Image of Emily">
      </div>
    </div>
  </div>
</section>

<section id="about-section2">
  <div class="container py-4">
    <hr>
    <h2 class="text-center p-5">My Journey</h2>
    <div class="row">
      <div class="col-12 col-md-6">
        <p class="lead p-line-height px-3"><?php echo $journeyPL ?></p>
      </div>
      <div class="col-12 col-md-6">
        <p class="lead p-line-height px-3"><?php echo $journeyPR ?></p>
      </div>
    </div>
  </div>
</section>


<?php get_footer() ?>
