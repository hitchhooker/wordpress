<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Amenum_Core
 */

?>

<article id="team_member-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content container">

    <div class="row">
      <div class="col col-12 mb-5">
        <h5>Highlights:</h5>
        <p><?php the_field('highlights'); ?></p>
      </div>
      <div class="col col-12 col-md-6 mb-5">
        <h5>Education:</h5>
        <?php if(have_rows('education')): while(have_rows('education')): the_row(); ?>
        <p><?php the_sub_field('item'); ?></p>
        <?php endwhile; endif; ?>
      </div>
      <div class="col col-12 col-md-6 mb-5">
        <h5>Languages:</h5>
        <p><?php the_field('languages'); ?></p>
      </div>
      <div class="col col-12 col-md-6 mb-5 mb-md-0">
        <h5>Career:</h5>
        <?php if(have_rows('career')): while(have_rows('career')): the_row(); ?>
        <p><?php the_sub_field('item'); ?></p>
        <?php endwhile; endif; ?>
      </div>
      <div class="col col-12 col-md-6 mb-5 mb-md-0">
        <h5>Memberships:</h5>
        <?php if(have_rows('memberships')): while(have_rows('memberships')): the_row(); ?>
        <p><?php the_sub_field('item'); ?></p>
        <?php endwhile; endif; ?>
      </div>
    </div>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer container">
		<?php //amenum_core_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->
