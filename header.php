<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container site-header-inner">
    <a class="logo-wrap" href="<?php echo esc_url(home_url('/')); ?>">
      <div class="logo-mark">SJ</div>
      <div class="logo-text">SuomiJobs</div>
    </a>

    <?php suomijobs_primary_menu(); ?>
  </div>
</header>