<?php get_header() ?>

<!-- Grab Content -->
<?php
$bLifestyle1 = get_field('bullet_lifestyle_1');
$bLifestyle2 = get_field('bullet_lifestyle_2');
$bLifestyle3 = get_field('bullet_lifestyle_3');

$bLifestyleImg = get_field('lifestyle_image');

?>

<section id="information-section1" class="nav-scroll">
  <div class="container">
    <div class="row ">
      <div class="col-12 col-lg-4">
        <h2 class="text-center">Lifestyle</h2>
        <ul class="pb-3">
          <li class="py-2 lead p-line-height"><?php echo $bLifestyle1 ?></li>
          <li class="py-2 lead p-line-height"><?php echo $bLifestyle2 ?></li>
          <li class="py-2 lead p-line-height"><?php echo $bLifestyle3 ?></li>
        </ul>
      </div>
      <div class="col-12 col-lg-8">
        <div class="overlay-info"></div>
        <img class="img-fluid w-90 h-70" src="<?php echo $bLifestyleImg ?>" alt="lifestyle image">
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>
