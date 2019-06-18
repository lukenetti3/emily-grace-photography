<?php get_header() ?>

<!-- Grab Content -->
<?php
$bLifestyle1 = get_field('bullet_lifestyle_1');
$bLifestyle2 = get_field('bullet_lifestyle_2');
$bLifestyle3 = get_field('bullet_lifestyle_3');

$bLifestyleImg = get_field('lifestyle_image');

$LifestyleCard = get_field('lifestyle_card');
$LifestyleBlockText = get_field('lifestyle_block_text');

$bBride1 = get_field('bullet_bride_1');
$bBride2 = get_field('bullet_bride_2');
$bBride3 = get_field('bullet_bride_3');

$bBrideImg = get_field('bride_image');

$BrideCard = get_field('bride_card');
$BrideBlockText = get_field('bride_block_text');

?>

<section id="information-section1" class="nav-scroll">
  <div class="container">
    <div class="row ">
      <div class="col-12 col-lg-4">
        <h2 class="text-center">Lifestyle</h2>
        <ul class="pb-3 paddingL-0">
          <li class="py-2 lt-font md-line-height"><?php echo $bLifestyle1 ?></li>
          <li class="py-2 lt-font md-line-height"><?php echo $bLifestyle2 ?></li>
          <li class="py-2 lt-font md-line-height"><?php echo $bLifestyle3 ?></li>
        </ul>
        <div class="d-flex justify-content-center">
          <button class="p-2 mb-4 cta-button">
            <a href="<?php echo get_bloginfo('wpurl') ?>/contact">Get Started</a>
          </button>
        </div>
      </div>
      <div class="col-12 col-lg-8">
        <div class="overlay-beige"></div>
        <img class="img-fluid w-90 h-70" src="<?php echo $bLifestyleImg ?>" alt="lifestyle image">
      </div>
    </div>
  </div>
</section>

<section id="information-section2">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4">
        <div class="card">
          <div class="card-body card-body-beige">
            <h4 class="card-title">Pricing</h4>
            <h5 class="card-subtitle card-subtitle-update font-italic">Lifestyle</h5>
            <p class="py-4 lt-font"><?php echo $LifestyleCard ?></p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-8">
        <p class="lt-font pl-lg-5 md-line-height block-txt"><?php echo $LifestyleBlockText ?></p>
      </div>
    </div>
  </div>
</section>

<div class="container py-5" id="go-here">
  <hr>
</div>

<section id="information-section3">
  <div class="container">
    <div class="row ">
      <div class="col-12 col-lg-4">
        <h2 class="text-center">Brides</h2>
        <ul class="pb-3 paddingL-0">
          <li class="py-2 lt-font md-line-height"><?php echo $bBride1 ?></li>
          <li class="py-2 lt-font md-line-height"><?php echo $bBride2 ?></li>
          <li class="py-2 lt-font md-line-height"><?php echo $bBride3 ?></li>
        </ul>
        <div class="d-flex justify-content-center">
          <button class="p-2 mb-4 cta-button">
            <a href="<?php echo get_bloginfo('wpurl') ?>/contact">Get Started</a>
          </button>
        </div>
      </div>
      <div class="col-12 col-lg-8 order-lg-first">
        <div class="overlay-grey"></div>
        <img class="img-fluid w-90 h-70" src="<?php echo $bBrideImg ?>" alt="lifestyle image">
      </div>
    </div>
  </div>
</section>

<section id="information-section4">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4">
        <div class="card">
          <div class="card-body card-body-grey">
            <h4 class="card-title">Pricing</h4>
            <h5 class="card-subtitle card-subtitle-update font-italic">Brides</h5>
            <p class="py-4 lt-font"><?php echo $BrideCard ?></p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-8 order-lg-first">
        <p class="lt-font pl-lg-5 md-line-height block-txt"><?php echo $BrideBlockText ?></p>
      </div>
    </div>
  </div>
</section>


<?php get_footer() ?>
