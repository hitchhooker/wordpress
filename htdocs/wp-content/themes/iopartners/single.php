<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Amenum_Core
 */

get_header();

?>

	<main id="primary" class="site-main bg-white">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/header', get_post_type() );
			
			get_template_part( 'template-parts/content', get_post_type() );

			/*
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'amenum-core' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'amenum-core' ) . '</span> <span class="nav-title">%title</span>',
				)
			); */

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				//comments_template();
			endif;

		endwhile; // End of the loop.

		//get_template_part( 'template-parts/cta', get_post_type() );

		?>

	</main><!-- #main -->

<?php
get_footer();
