<?php

/**
 * Blog Posts Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   int|string $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = !empty($block['anchor']) ? $block['anchor'] : 'blog-posts-' . $block['id'];

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'blog-posts';
$classes = !empty($block['className']) ? $classes . ' ' . $block['className'] : $classes;
$classes = !empty($block['align']) ? $classes .= ' align-' . $block['align'] : $classes;

?>

<div class="row my-5 <?php echo esc_attr($classes); ?>">
  <div class="col mb-3">
    <h2><?php echo get_field('section_title'); ?></h2>
  </div>

  <div class="col col-12">
    <div class="row">

      <?php
      $args = array('posts_type' => 'post', 'category__in' => get_field('category'), 'posts_per_page' => 3);
      $the_query = new WP_Query( $args );
      ?>
      <?php if( $the_query -> have_posts() ): ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

      <div class="col col-12 col-md-4">
        <a href="<?php echo get_the_permalink(); ?>">
          <div class="content">
            <?php if(get_field('show_featured_image') === true) : ?>
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