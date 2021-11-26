<?php
$id = !empty($block['anchor']) ? $block['anchor'] : 'carousel-' . $block['id'];
?>

<div id="<?php echo $id; ?>" class="container image-carousel">

  <div id="<?php echo $block['id']; ?>" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
    <?php
      $count = 0;
      if(have_rows('slides')):
      while(have_rows('slides')):
      the_row();
      $image = get_sub_field('slide_image');
    ?>

      <?php if($count == 0): ?>
        <div class="carousel-item active">
      <?php else: ?>
        <div class="carousel-item">
      <?php endif; ?>

          <img src="<?php echo $image['sizes']['medium_large']; ?>" class="d-block mx-auto" alt="<?php echo $image['alt']; ?>">
          <div class="carousel-caption d-none d-md-block">
            <h5><?php echo $image['title']; ?></h5>
            <p><?php echo $image['description']; ?></p>
          </div>
        </div>

    <?php
      $count++;
      endwhile;
      endif;
      $slides = $count;
    ?>

  </div>

  <div class="carousel-indicators">
    <?php
      $count = 0;
    ?>

    <?php while($count < $slides): ?>
      <?php if($count == 0): ?>
        <button type="button" data-bs-target="#<?php echo $block['id'] ?>" data-bs-slide-to="<?php echo $count; ?>" class="active" aria-current="true" aria-label="Slide <?php echo $count + 1; ?>"></button>
      <?php else: ?>
        <button type="button" data-bs-target="#<?php echo $block['id'] ?>" data-bs-slide-to="<?php echo $count; ?>" aria-label="Slide <?php echo $count + 1; ?>"></button>
      <?php endif; ?>
    <?php $count++;
    endwhile; ?>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $block['id'] ?>" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $block['id'] ?>" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>

  </div>
