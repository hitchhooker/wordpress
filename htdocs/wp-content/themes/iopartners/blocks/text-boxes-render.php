<?php

// Create id attribute allowing for custom "anchor" value.
$id = !empty($block['anchor']) ? $block['anchor'] : 'text-boxes-' . $block['id'];

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'text-boxes';
$classes = !empty($block['className']) ? $classes . ' ' . $block['className'] : $classes;
$classes = !empty($block['align']) ? $classes .= ' align-' . $block['align'] : $classes;
?>

<div id="<?php echo esc_attr($id); ?>" class="row justify-content-center <?php echo esc_attr($classes); ?>">
    <?php
      if( have_rows('text_boxes') ): while( have_rows('text_boxes') ) : the_row();
        $box_width = get_sub_field('text_box_width') ? get_sub_field('text_box_width') : 'col-md-4';
        $box_color = get_sub_field('text_box_color') ? get_sub_field('text_box_color') : 'bg-white';
        $min_height = get_sub_field('min_height') ? get_sub_field('min_height')  . 'px' : '240' . 'px';
        $image = get_sub_field('image');
    ?>

    <?php if($image): ?>

    <div class="col col-12 <?php echo $box_width; ?> text-box <?php echo $box_color; ?> p-0 has-image d-none d-md-block" style="min-height:<?php echo $min_height; ?>">
        <div class="text-box-content">

          <div class="image">
            <img src="<?php echo get_sub_field('image'); ?>" class="img-fluid" alt="image" />
          </div>

        </div>
    </div>

    <?php else : ?>

      <div class="col col-12 <?php echo $box_width; ?> text-box <?php echo $box_color; ?>" style="min-height:<?php echo $min_height; ?>">
        <div class="text-box-content">

          <?php echo get_sub_field('text_box_content'); ?>

          <?php if(get_sub_field('read_more_link')) : ?>
            <a href="<?php the_sub_field('read_more_link') ?>" class="read-more">Read More</a>
          <?php endif; ?>

        </div>
    </div>

    <?php endif; ?>

    <?php endwhile; endif; ?>
</div>
