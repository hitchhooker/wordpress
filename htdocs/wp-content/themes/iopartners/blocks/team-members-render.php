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
$id = !empty($block['anchor']) ? $block['anchor'] : 'team-members-' . $block['id'];

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'team-members';
$classes = !empty($block['className']) ? $classes . ' ' . $block['className'] : $classes;
$classes = !empty($block['align']) ? $classes .= ' align-' . $block['align'] : $classes;

?>

<div class="row <?php echo esc_attr($classes); ?>">
  <div class="col col-12">
    <div class="row justify-content-between">

      <?php $the_query = new WP_Query( ['post_type' => 'team_member', 'posts_per_page' => -1, 'order' => 'ASC'] ); ?>
      <?php if( $the_query -> have_posts() ): $count = 0; ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); $count++; ?>

      <div class="col col-12 col-md-4 team-member mb-5">
        <div class="team-member-image">
          <a href="<?php echo get_the_permalink(); ?>">
            <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
          </a>
        </div>
        <div class="team-member-info">
          <a href="<?php echo get_the_permalink(); ?>">
            <h5 class="name"><?php the_title(); ?></h5>
            <p class="title"><?php the_field('title', get_the_id()); ?></p>
          </a>
        </div>
      </div>
    
      <?php endwhile; ?>
      <?php if($count % 3 != 0) : ?>
        <div class="col col-md-4">
          &nbsp;
        </div>  
      <?php endif; ?>
      <?php else : _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>

      <?php endif; ?>
      
    </div>
  </div>
</div>