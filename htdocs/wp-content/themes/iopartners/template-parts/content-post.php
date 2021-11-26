<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Amenum_Core
 */

?>

<?php if(!is_single()): ?>
  <div class="col col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white'); ?>>

    <div class="entry-content">
      <?php the_post_thumbnail('medium', 'img-fluid'); ?>
      <h3><?php the_title(); ?></h3>
      <p><?php echo get_the_date(); ?></p>
      <p><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink() ?>" class="read-more">Read More</a>
    </div><!-- .entry-content -->

    <footer class="entry-footer container">
      <?php //amenum_core_entry_footer(); ?>
    </footer><!-- .entry-footer -->

  </article><!-- #post-<?php the_ID(); ?> -->
  </div>

<?php else : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white'); ?>>

  <div class="entry-content container narrow">
    <?php
    the_content(
      sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'amenum-core' ),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        wp_kses_post( get_the_title() )
      )
    );

    wp_link_pages(
      array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'amenum-core' ),
        'after'  => '</div>',
      )
    );
    ?>
  </div><!-- .entry-content -->

  <footer class="entry-footer related-posts pt-5">
  <div class="container">
  <div class="row">

  <div class="col col-12">
    <div class="row">

      <?php
      $args = array('posts_type' => 'post', 'posts_per_page' => 3, 'meta_query' => array(array('key' => '_thumbnail_id','compare' => 'EXISTS'),));
      $the_query = new WP_Query( $args );
      ?>

      <?php if( $the_query -> have_posts() ): ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

      <div class="col col-12 col-md-4">
        <a href="<?php echo get_the_permalink(); ?>">
          <div class="content">
            <?php if(get_the_post_thumbnail()) : ?>
            <div class="post-image">
            <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
            </div>
            <?php endif; ?>

            <div class="excerpt py-3">
            <h4><?php the_title(); ?></h4>
            <p style="font-size: 1rem;">
            <?php
              if(!get_field('apply_by', get_the_ID())) :
              the_date('d.m.Y');
              else : echo "Apply by: " . get_field('apply_by', get_the_ID());
              endif;
            ?>
            </p>
            <?php the_excerpt(); ?>
            <a href="<?php echo get_the_permalink(); ?>" class="read-more">Read More</a>
            </div>
          </div>
        </a>
      </div>
      
      <?php endwhile; ?>
      <?php else : _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
      <?php endif; ?>
    </div>
  </div>

</div>
</div>
</footer><!-- .entry-footer -->

  </article><!-- #post-<?php the_ID(); ?> -->
<?php endif; ?>
