<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Amenum_Core
 */

get_header();
?>
<main id="primary" class="site-main bg-white">

  <header id="<?php echo esc_attr($id); ?>" class="header">
    <div class="container">
      <div class="row breadcrumbs-row">
        <div class="col col-md-7">
          <p class="breadcrumbs"><a href="/">Home</a> / <span class="current-page">News</span></p>
        </div>
      </div>

      <div class="row">
        
        <div class="col col-6 post-image">
          <?php the_post_thumbnail('medium', 'img-fluid'); ?>
        </div>

        <div class="col col-6 bg-light-2 post-meta d-flex align-items-center">
          <div class="content">
            <h1 class="post-name"><?php the_title(); ?></h1>
            <p class="post-date"><?php echo get_the_date(); ?></p>
            <p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
            <a class="post-link btn btn-dark" href="<?php the_permalink(); ?>">Read more</a>
          </div>
        </div>

      </div>
    </div>
  </header>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
      <?php
			endif;
      ?>
      <section class="blog-content">
        <div class="container">
          <div class="row">
            <?php
            /* Start the Loop */
            while ( have_posts() ) :
              the_post();

              /*
              * Include the Post-Type-specific template for the content.
              * If you want to override this in a child theme, then include a file
              * called content-___.php (where ___ is the Post Type name) and that will be used instead.
              */
              get_template_part( 'template-parts/content', get_post_type() );

            endwhile;

            ?>
          </div>
        </div>
      </section>
      <?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
