<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<header id="masthead" class="site-header sticky-top">
		<nav id="header-nav" class="navbar navbar-dark bg-transparent fixed-top">
      <div class="container">
        <div class="navbar-brand logo-dark">
        <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/logo-dark.svg"></a>
        </div>
        <div class="navbar-brand logo-light">
          <?php if(is_front_page() || is_page('contact-us')) : ?>
          <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/logo-light.svg"></a>
          <?php else : ?>
            <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/logo-dark.svg"></a>
          <?php endif; ?>
        </div>
        <?php if(is_front_page() || is_page('contact-us')) : ?>
        <button class="navbar-toggler" type="button" data-bs-target="#site-navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation" data-bs-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php else : ?>
        <button class="navbar-toggler" type="button" data-bs-target="#site-navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation" data-bs-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php endif; ?>
      </div>
		</nav>
  </header>

  <?php get_template_part( 'template-parts/offcanvas', 'menu' ); ?>
