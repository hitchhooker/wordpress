<?php

/* Hero Block Template. */

// Create id attribute allowing for custom "anchor" value.
$id = !empty($block['anchor']) ? $block['anchor'] : 'text-media-' . $block['id'];

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'text-media';
$classes = !empty($block['className']) ? $classes . ' ' . $block['className'] : $classes;
$classes = !empty($block['align']) ? $classes .= ' align-' . $block['align'] : $classes;

$text = get_field('text');
$image = get_field('image');
$col_order = get_field('column_order');
$text_width = get_field('text_column_width');
$image_width = get_field('slider_column_width');

if($col_order == true) {
  $text_col_order = " order-1";
  $image_col_order = " order-2";
} else {
  $text_col_order = " order-2";
  $image_col_order = " order-1";
}

?>


<div id="<?php echo $id; ?>" class="row text-media justify-content-between <?php echo esc_attr($classes); ?>">

    <div class="col <?php echo $text_width; ?>">
        <?php echo $text; ?>
    </div>

    <?php if($text_width == "col-md-4" && $image_width == "col-md-4" ) : ?>
      <div class="col <?php echo $text_width; ?>"></div>
    <?php endif; ?>

    <div class="col <?php echo $image_width; ?>">
    <?php
    $id = !empty($block['anchor']) ? $block['anchor'] : 'carousel-' . $block['id'];
    ?>

    <div id="<?php echo $id; ?>" class="container content-carousel">

      <div id="<?php echo $block['id']; ?>" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
        <?php
          $count = 0;
          if(have_rows('slider')):
          while(have_rows('slider')):
          the_row();
          $slide_content = get_sub_field('slide_content');
          $slide_image = array();
        ?>

          <?php if($count == 0): ?>
            <div class="carousel-item active">
          <?php else: ?>
            <div class="carousel-item">
          <?php endif; ?>

              <!--<img src="<?php echo $image['sizes']['medium_large']; ?>" class="d-block mx-auto" alt="<?php echo $image['alt']; ?>">-->
              <p><?php echo $slide_content; ?></p>
              <!--
              <div class="carousel-caption d-none d-md-block">
                <h5><?php echo $image['title']; ?></h5>
                <p><?php echo $slide_content; ?></p>
              </div>
          -->
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
        <!--
        <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $block['id'] ?>" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $block['id'] ?>" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        -->
        </div>

      </div>

    </div>

</div>
