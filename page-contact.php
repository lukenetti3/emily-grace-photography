<?php get_header();

$aboutImage = get_field('image');

the_post(); ?>

<section class="pt-5">
  <div class="container nav-scroll" id="contact-page-section">
    <div class="row">
      <div class="col-12 col-lg-6">
        <h2 class="text-center">SEND A NOTE</h2>
        <p class="lt-font about-line-height text-center px-5">I’d love to hear from you! Please fill out the form below or send a note directly to:
emilygnetti@gmail.com</p>
        <div class="form-container">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="col-12 col-lg-6 text-center">
        <div class="pl-5 overlay-contact d-sm-none d-md-block"></div>
        <img class="img-fluid cont-img" src="<?php echo $aboutImage ?>" alt="Image of Emily">
      </div>
    </div>

  </div>
</section>

<?php get_footer() ?>
