<?php

/**
 * Section Block Template.
 */

$id = !empty($block['anchor']) ? $block['anchor'] : 'section-' . $block['id'];

/* Create class attribute allowing for custom "className" and "align" values. */
$classes = '';
$classes = !empty($block['className']) ? $classes . ' ' . $block['className'] : $classes;
$classes = !empty($block['align']) ? $classes .= ' align-' . $block['align'] : $classes;

/* Load custom field values. */
$classes = !empty(get_field('bg_color')) ? $classes . ' ' . get_field('bg_color') : $classes;
$classes = !empty(get_field('bg_overlay')) ? $classes . ' ' . get_field('bg_overlay') : $classes;

$padding = get_field('padding');

if($padding == 1) {
  $classes .= $classes . " p-0";
}

?>

<section id="<?php echo esc_attr($id); ?>" class="content-section<?php echo esc_attr($classes); ?>">
  <div class="container">
    <?php if(is_admin()) { echo '<span style="font-weight:bold;">Content Section</span>'; } ?>
    <InnerBlocks />
  </div>
</section>