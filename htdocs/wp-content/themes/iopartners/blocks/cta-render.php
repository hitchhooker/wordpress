<?php

/**
 * CTA Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'cta-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'cta';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$cta_title = get_field('cta_title') ?: 'Page Title';
$cta_subtitle = get_field('cta_subtitle') ?: '';
$cta_instructions = get_field('cta_instructions');
$cta_shortcode = get_field('cta_shortcode');

?>
<section id="<?php echo esc_attr($id); ?>" class="cta <?php echo esc_attr($className); ?>">
    <div class="container">
		<h2><?php echo $cta_title; ?></h2>
		<p><?php echo $cta_subtitle; ?></p>
        <?php echo do_shortcode($cta_shortcode); ?>
        <p><?php echo $cta_instructions; ?></p>
    </div>
</section>