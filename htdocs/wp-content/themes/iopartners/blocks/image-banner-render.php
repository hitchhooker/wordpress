<?php
/* Image Banner Template. */

/* Create id attribute allowing for custom "anchor" value. */
$id = !empty($block['anchor']) ? $block['anchor'] : 'image-banner-' . $block['id'];

/* Create class attribute allowing for custom "className" and "align" values. */
$classes = 'image-banner';
$classes = !empty($block['className']) ? $classes . ' ' . $block['className'] : $classes;

/* Load values and assign defaults. */
$image = get_field('image') ?: '';
$height = get_field('height') ?: '400';
?>

<section id="<?php echo esc_attr($id); ?>" class="text-light d-flex <?php echo esc_attr($classes); ?>">
  <div class="container">
    <div class="row h-100 align-items-end">
      <div class="col col-md-7">
      </div>
    </div>
  </div>
</section>

<style>
<?php
echo '#' . $id; ?> {
  background: url('<?php echo $image; ?>') center center, linear-gradient(312.5deg, rgba(42, 51, 74, 0.2) 22.5%, rgba(42, 51, 74, 0.6) 50%);
  background-size: cover;
  height: <?php echo $height; ?>px;
  }
</style>
