<?php get_header() ?>

<!-- Grab Content -->
<?php
$aboutImage = get_field('image');
$aboutTxt = get_field('text');
?>

<section id="about-section1">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 order-lg-2">
        <h2>About Me</h2>
      </div>
      <div class="col-12 col-lg-6 order-lg-1">
        <img class="img-fluid w-100 h-100" src="<?php echo $aboutImage ?>" alt="Image of Emily">
      </div>
      <div class="col-12 col-lg-6 order-lg-2">
        <p class="lead p-line-height"><?php echo $aboutTxt ?></p>
      </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>
