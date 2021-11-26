<?php
// Create id attribute allowing for custom "anchor" value.
$id = !empty($block['anchor']) ? $block['anchor'] : 'faq-' . $block['id'];

// Create class attribute allowing for custom "className" and "align" values.
$className = 'faq';
$className = !empty($block['className']) ? $className . ' ' . $block['className'] : $className;
$className = !empty($block['align']) ? $className .= ' align-' . $block['align'] : $className;
?>

<div id="<?php echo esc_attr($id); ?>" class="row justify-content-center <?php echo esc_attr($className); ?>">

<?php $count = 1; ?>
<?php if(have_rows('faq_items')): while(have_rows('faq_items')): the_row(); ?>
<?php $acc_id = $id . "-" . $count++; ?>

<div class="accordion-item faq-item">

  <div class="accordion-header faq-question" data-bs-toggle="collapse" data-bs-target="#<?php echo $acc_id; ?>">
    <h4><?php the_sub_field('question') ?></h4>
  </div>

  <div id="<?php echo $acc_id; ?>" class="accordion-collapse collapse faq-answer" data-bs-parent="#<?php echo $id; ?>">
    <div class="accordion-body">
    <?php the_sub_field('answer') ?>
    </div>
  </div>

</div>

<?php endwhile; endif; ?>

</div>