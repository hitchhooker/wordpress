<?php

/**
 * Featured Items Block Template.
 */

/* Create id attribute allowing for custom "anchor" value. */
$id = !empty($block['anchor']) ? $block['anchor'] : 'featured-' . $block['id'];

/* Create class attribute allowing for custom "className" and "align" values. */
$classes = 'featured';
$classes = !empty($block['className']) ? $classes . ' ' . $block['className'] : $classes;
$classes = !empty($block['align']) ? $classes .= ' align-' . $block['align'] : $classes;

?>

<div class="row g-5 <?php echo esc_attr($classes); ?> ">

  <?php if( have_rows('featured_items') ): ?>
    <?php while( have_rows('featured_items') ): the_row();
      $image = get_sub_field('featured_item_image');
      $title = get_sub_field('featured_item_title');
      $desc = get_sub_field('featured_item_description');
      $link = get_sub_field('featured_item_link');
    ?>

    <div class="col col-md-6">
    <a href="<?php echo $link; ?>">
        <div class="p-5 border bg-light content" style="background:linear-gradient(to bottom, rgba(19,170,87,0) 20%, rgba(19,170,87,1) 60%, rgba(19,170,87,1) 100%), url('<?php echo $image; ?>') center center no-repeat;background-size:cover;">
        <div style="height:180px;"></div>
        
          <h3><?php echo $title; ?></h3>
          <?php echo $desc; ?>
          <button class="featured-button btn mt-3">Lue lisää</button>
        
      </div>
      </a>
    </div>
        
    <?php endwhile; ?>
  <?php endif; ?>

</div>
