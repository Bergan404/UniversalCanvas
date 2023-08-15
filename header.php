<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
  <!-- Stylesheets
	============================================= -->
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="container-fluid p-0 p-sticky color-1-bg" role="banner">
    <div class="container py-2">
      <div class="row justify-content-between align-items-center">
        <div class="col-auto">
          <a href="/">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/img/logo.png" alt="LOGO ALT GOES HERE" style="width:150px;">
          </a>
        </div>
        <div class="col-auto">
          <nav class="navigation-menu d-none d-lg-flex align-items-center">
            <?php $primary = ['theme_location' => 'primary'];
            wp_nav_menu($primary) ?>
          </nav>
          <div id="burger-nav" role="button" aria-label="Open navigation" class="d-lg-none">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="burger-overlay"></div>
        </div>
      </div>
    </div>
    <nav class="mobile-nav d-flex justify-content-center align-items-center">
      <?php $primary = ['theme_location' => 'primary'];
      wp_nav_menu($primary) ?>
    </nav>
  </header>

  <main role="main" style="min-height:75vh;">
