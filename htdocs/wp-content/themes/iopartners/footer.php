<?php
/**
 * The template for displaying the footer
 * 
 * Contains the closing of the #content div and all content after.
 *
 * @package Amenum_Core
 */

?>

	<footer id="footer" class="site-footer bg-dark pt-5">
    <div class="footer-content">

    <?php if(get_field('show_map') === true) : ?>
      <?php get_template_part('template-parts/footer', 'location'); ?>
    <?php endif; ?>
    <?php get_template_part('template-parts/footer', 'form'); ?>
    <?php if(get_field('show_form') === true || get_post_type() == 'team_member' || is_home() || has_category('careers') || is_single()) : ?>
    
    <?php endif; ?>

    <div id="footer-navigation" class="container">
      <div class="row">

        <div class="col col-12 col-md-4">
          <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/logo-light.svg"></a>
        </div>

        <div class="col col-12 col-md-8 d-md-flex align-items-center justify-content-end">
          <?php wp_nav_menu(array('theme_location' => 'footer-1', 'menu_id' => 'footer-menu-1')); ?>
        </div>

      </div>
    </div>

    <div id="absolute-footer" class="container site-info">
      <div class="row">
        <div class="col col-12 col-md-6 footer-copyright order-2 order-md-1">
          <ul class="list-unstyled">
            <li>
              <?php printf( esc_html__( '&copy; %1$s %2$s', 'iopartners' ), date("Y"), get_bloginfo ( 'name' ) ); ?>
            </li>
            <li>
              Website made by <a href="https://sisaltomiikka.fi/">Sisältö Miikka</a>
            </li>
        </div>
        <div class="col col-12 col-md-6 text-right footer-legal-links order-1 order-md-2">
          <?php wp_nav_menu(array('theme_location' => 'footer-2', 'menu_id' => 'footer-menu-2')); ?>
        </div>
      </div>

    </div>
    </div>

	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
