<?php get_header() ?>

<!-- Grab Images -->
<?php
$image_left = get_field('image_left');
$image_center = get_field('image_center');
$image_right = get_field('image_right');
?>


<div id="startchange">
  <div class="container hero-section">
    <div class="row img-set-3">
      <div class="col box">
        <img class="img-fluid w-100 h-100" src="<?php echo $image_left ?>" alt="two kids">
      </div>
      <div class="col box">
        <img class="img-fluid w-100 h-100" src="<?php echo $image_center ?>" alt="bike">
      </div>
      <div class="col box">
        <img class="img-fluid w-100 h-100" src="<?php echo $image_right ?>" alt="bride">
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>
