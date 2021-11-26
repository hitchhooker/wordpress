<?php
/* Hero Block Template. */

/* Create id attribute allowing for custom "anchor" value. */
$id = !empty($block['anchor']) ? $block['anchor'] : 'hero-' . $block['id'];

/* Create class attribute allowing for custom "className" and "align" values. */
$classes = 'hero';
$classes = !empty($block['className']) ? $classes . ' ' . $block['className'] : $classes;
$classes = !empty($block['align']) ? $classes .= ' align-' . $block['align'] : $classes;

/* Load values and assign defaults. */
$hero_title = get_field('hero_title') ?: 'Page Title';
$hero_subtitle = get_field('hero_subtitle') ?: 'Page Subtitle';
$hero_image = get_field('hero_image') ?: '';
?>

<?php if(get_field('is_full_screen')) : ?>
<section id="<?php echo esc_attr($id); ?>" class="text-light d-flex hero-full <?php echo esc_attr($classes); ?>">

  <?php
  if(get_field('hero_video_url')) {
    ?>
    <video autoplay muted loop id="ioVideo">
      <source src="<?php the_field('hero_video_url') ?>" type="video/mp4">
    </video>
    <?php
  }
  ?>
  <div class="container">
    <div class="row h-100 align-items-end">
      <div class="col col-md-7">
      <h1><?php echo $hero_title; ?></h1>
      <p class="lead"><?php echo $hero_subtitle; ?></p>
      </div>
    </div>
  </div>
</section>

<style>
  <?php echo '#' . $id; ?> {
    background: url('<?php echo $hero_image; ?>') center center, linear-gradient(312.5deg, rgba(42, 51, 74, 0.2) 22.5%, rgba(42, 51, 74, 0.6) 50%);
    background-size: cover;
  }
</style>

<?php else : ?>
  <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> bg-white">
    <div class="container">
      <div class="row mt-5 align-items-end">
        <div class="col col-md-8 hero-content my-5">
        <p class="breadcrumbs"><a href="/">Home</a> / <span class="current-page"><?php echo $hero_title; ?></span></p>
        <h1 class="mt-5 mb-3"><?php echo $hero_title; ?></h1>
        <p class="lead"><?php echo $hero_subtitle; ?></p>
        </div>
      </div>
    </div>
    <?php if($hero_image) : ?>
    <div class="row">
      <div class="col col-12">
        <img src="<?php echo $hero_image; ?>" />
      </div>
    </div>
    <?php endif; ?>
  </section>

<?php endif; ?>
