<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package one-eighty-church
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="main-container" class="site ">
  <?php if (is_home()) : ?>
    <div class='banner-wrapper' style="background: url(<?php echo get_template_directory_uri() . "/images/pano-community.jpg"?>) center no-repeat fixed">
  <?php endif; ?>
      <header id="main-header">
        <nav class='navbar navbar-default site-header'>
          <div class='navbar-header'>
            <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img src="<?php echo get_template_directory_uri() . "/images/logo.png"?>" alt="180 Church Logo">
            </a>
            <?php
              wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'container'      => 'nav'
              ) );
            ?>
          </div>
        </nav>
        <div class="site-branding">
        </div><!-- .site-branding -->
      </header><!-- #masthead -->

    <?php if (is_home()) :?>
      <div class="clearfix intro-container">
        <div class="intro-wrapper">
          <h2>Welcome Home!</h2>
          <p>
            Here at 180 Church, we welcome you to come just as you are.
            Whether you are near or far from faith, lost or found, or anywhere in between, we invite you to discover and encounter Christ with us.
            We believe you will experience a real change where Christ doesn't change only some things about you; He changes everything!
          </p>
        </div>
      </div>
      <!-- Extra ending div encloses banner-container-->
    </div>
    <?php endif;?>

	<div id="content" class="site-content">
