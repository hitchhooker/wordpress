<?php
/* Create id attribute allowing for custom "anchor" value. */
$id = 'header-' . get_the_ID();
?>

<header id="<?php echo esc_attr($id); ?>" class="header py-5 bg-white">

  <div class="container">

    <div class="row mt-5 align-items-end">
      <div class="col col-md-7 mt-5">
      <p class="breadcrumbs"><a href="/">Home</a> / <a href="<?php echo get_post_type_archive_link( 'post' ); ?>">News</a> / <span class="current-page"><?php the_title(); ?></span></p>
      </div>
    </div>

    <div class="row">
      <div class="col col-6 post-image">
        <?php the_post_thumbnail('medium', 'img-fluid'); ?>
      </div>

      <div class="col col-6 bg-salmon post-meta">
        <h1 class="name"><?php the_title(); ?></h1>
        <p><?php the_date(); ?></p>
        <p><-- Share buttons go here --></p>
      </div>
    </div>

  </div>

</header>

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
            <!--<p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>-->
          </div>
        </div>

      </div>
    </div>
  </header>