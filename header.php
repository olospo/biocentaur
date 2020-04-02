<?php /* Header */  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo('name'); ?><?php wp_title( '|', true, 'left' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimal-ui" />
<?php wp_head(); ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png"/>
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/img/favicon-32x32.png"/>
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/img/favicon-16x16.png"/>
<?php if( get_field('social_metadata', 'options') ): the_field('social_metadata', 'options'); endif; // Social Metadata ?>
<?php if( get_field('google_analytics', 'options') ): the_field('google_analytics', 'options'); endif; // Google Analytics Code ?>
<meta name="google-site-verification" content="add-content-here" />
</head>
<body <?php body_class(); ?>>
<div class="fixed_header">
<header class="menu">
  <div class="container">
    <!-- Main Menu -->
    <nav class="primary nine columns">
      <?php wp_nav_menu( array( 'theme_location' => 'main', 'container'=> false, 'menu_class'=> false ) ); ?>
    </nav>
    <div class="extras three columns">
      <ul class="social-icons">
        <li><a href="<?php the_field('facebook_link','options'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/facebook_icon.svg" /></a></li>
        <li><a href="<?php the_field('twitter_link','options'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/twitter_icon.svg" /></a></li>
        <li><a href="<?php the_field('youtube_link','options'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/youtube_icon.svg" /></a></li>
      </ul>
    </div>
  </div>
</header>
<header class="logo_secondary_menu">
  <div class="container">
    <div class="logo three columns">  
      <?php if ( is_front_page() ) { echo '<h1 class="site-title">'; } else { echo '<p class="site-title">'; } ?>
      <a href="<?php echo get_site_url(); ?>">
        <img src="<?php bloginfo('template_directory'); ?>/img/biocentaur_logo.svg" alt="Biocentaur Logo">
      </a>
      <?php if ( is_front_page() ) { echo '</h1>'; } else { echo '</p>'; } ?>
    </div>
    <nav class="secondary nine columns">
      <a href="#" class="button primary">Order a test</a>
      <?php if (is_tree(164) || 'condition' == get_post_type()) { // Individuals and/or children ?>
        <?php wp_nav_menu( array( 'theme_location' => 'individuals', 'container'=> false, 'menu_class'=> false ) ); ?>
      <?php } elseif (is_tree(169)) { // Clinicians and/or children ?>
        <?php wp_nav_menu( array( 'theme_location' => 'clinicians', 'container'=> false, 'menu_class'=> false ) ); ?>
      <?php } else { // Other pages ?>
        <ul>
          <li><a href="<?php echo get_site_url(); ?>/individuals">Individuals</a></li>
          <li><a href="<?php echo get_site_url(); ?>/clinicians">Clinicians</a></li>
        </ul>
      <?php } ?>
      <!-- Mobile Menu Trigger -->
      
    </nav>
    <a class="menu-toggle mobile_menu" aria-controls="primary-menu">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </a>
    
  </div>
</header>
<nav class="mobile">
  <?php wp_nav_menu( array( 'theme_location' => 'mobile_main' ) ); ?>
</nav>
</div>