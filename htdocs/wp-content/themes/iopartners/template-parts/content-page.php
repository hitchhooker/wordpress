<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Amenum_Core
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--<header class="entry-header container pt-3">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>--><!-- .entry-header -->

	<?php amenum_core_post_thumbnail(); ?>

	<div class="entry-content container-fluid p-0">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'amenum-core' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
