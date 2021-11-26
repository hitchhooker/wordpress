<?php

// Create id attribute allowing for custom "anchor" value.
$id = !empty($block['anchor']) ? $block['anchor'] : 'icon-box-' . $block['id'];

// Create class attribute allowing for custom "className" and "align" values.
$className = 'icon-box';
$className = !empty($block['className']) ? $className . ' ' . $block['className'] : $className;
$className = !empty($block['align']) ? $className .= ' align-' . $block['align'] : $className;

$icon_position = get_field('icon_position') ? 'icon-left' : 'icon-top';
$highlight = get_field('icon_box_highlight') == 1 ? " highlight" : "";
$className .= $highlight;

$icon = get_field('icon_box_icon');
$content = get_field('icon_box_text');

?>

<div id="<?php echo esc_attr($id); ?>" class="row justify-content-center <?php echo esc_attr($className); ?>">
    <div class="col col-md-12 <?php echo $icon_position; ?>">
        <div class="icon-box-icon"><img src="<?php echo $icon; ?>" class="img-fluid"></div>
        <div class="icon-box-content"><?php echo $content; ?></div>
    </div>
</div>
