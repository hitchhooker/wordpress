<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Amenum_Core
 */

?>

<div class="col col-md-4">
<article id="post-<?php the_ID(); ?>" <?php post_class('bg-white'); ?>>

	<div class="entry-content">
    <h3><?php the_title(); ?></h3>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink() ?>">Read More</a>
	</div><!-- .entry-content -->

	<footer class="entry-footer container">
		<?php //amenum_core_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->
</div>
