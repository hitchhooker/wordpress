<?php

/**
 * Trust Banner Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'trust-banner-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'trust-banner';

// Load values and assign defaults.

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> bg-white">
  <div class="container my-md-5">
    <div class="row">
      <div class="col col-12 col-md-4">
        <div class="row">
          <div class="col col-5 col-md-4 number">
            <span>12</span>
          </div>
          <div class="col col-7 col-md-8 description d-flex align-items-center">
            <span>experts in<br /> the team</span>
          </div>
        </div>
      </div>
      <div class="col col-12 col-md-4">
        <div class="row">
          <div class="col col-6 col-md-6 number">
            <span>500+</span>
          </div>
          <div class="col col-6 col-md-6 description d-flex align-items-center">
            <span>clients<br /> trust us</span>
          </div>
        </div>
      </div>
      <div class="col col-12 col-md-4">
        <div class="row">
          <div class="col col-5 col-md-4 number">
            <span>10</span>
          </div>
          <div class="col col-7 col-md-8 description d-flex align-items-center">
            <span>years of<br /> esperience</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>