<?php
$cta_text = get_field('contact_form_cta') ? get_field('contact_form_cta') : 'Have a project in mind? Leave us a message';
$shortcode = get_field('contact_form_shortcode') ? get_field('contact_form_shortcode') : '[contact-form-7 id="257" title="Contact form"]';
$button_text = get_field('contact_form_button_text') ? get_field('contact_form_button_text') : "Let's talk";
?>

<div id="footer-form" class="container d-flex align-items-center">
  <div class="row">

    <div class="col col-12">
      <div class="text-center mb-5">
      <h3><?php echo $cta_text; ?></h3>
      </div>

      <?php if(get_field('opened_by_default') === true): ?>
        <div class="contact-form-content">
          <?php echo do_shortcode($shortcode); ?>
        </div>
      <?php else : ?>
        <div class="text-center">
        <a class="btn btn-white contact-form-button"><?php echo $button_text; ?></a>
        </div>
          <div class="contact-form-content" style="display:none;">
          <?php echo do_shortcode($shortcode); ?>
        </div>
      <?php endif; ?>
    </div>

  </div>
</div>