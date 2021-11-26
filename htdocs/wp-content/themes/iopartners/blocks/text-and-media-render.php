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
$image_2 = get_field('image_2');
$col_order = get_field('column_order');
$col_order_mobile = get_field('column_order_mobile');
$text_col_width = get_field('text_column_width');
$media_col_width = get_field('media_column_width');

if($col_order_mobile == true) {
  $text_col_order = " order-2";
  $media_col_order = " order-1";
} else {
  $text_col_order = " order-1";
  $media_col_order = " order-2";
}

if($col_order == true) {
  $text_col_order .= " order-md-2";
  $media_col_order .= " order-md-1";
} else {
  $text_col_order .= " order-md-1";
  $media_col_order .= " order-md-2";
}

?>


<div id="<?php echo $id; ?>" class="row text-media justify-content-between <?php echo esc_attr($classes); ?>">

    <div class="col col-12 <?php echo $text_col_width; ?> <?php echo $text_col_order; ?> d-flex align-items-center text">
      <div class="content">
        <?php echo $text; ?>
        <?php if(get_field('link_text') && get_field('link_target')) : ?>
          <a href="<?php the_field('link_target') ?>" class="read-more"><?php the_field('link_text') ?></a>
        <?php endif; ?>
      </div>
    </div>

    <div class="col <?php echo $media_col_width; ?> <?php echo $media_col_order; ?> d-flex align-items-center image">
      <div class="content">
        <?php if($image): ?>
        <div class="image">
        <img src="<?php echo $image; ?>" class="img-fluid" style="object-fit:cover;"/>
        </div>

        <?php if(strlen($image_2) > 10) : // Find a nicer way to test if it's set ?>
          <div class="image image-2">
          <img src="<?php echo $image_2; ?>" class="img-fluid" style="object-fit:cover;"/>
          </div>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>

</div>
