<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/app.css">
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>

    <!-- Menu -->

    <nav>
      <div class="nav__logo">
        <a href="<?= home_url('/home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo" /></a>
      </div>
      <ul class="nav__links">
        <li class="link"><a href="<?= home_url('/home'); ?>">Home</a></li>
        <li class="link"><a href="<?= home_url('/contact'); ?>">Contact</a></li>
      </ul>
      <a href="<?= home_url('/connexion'); ?>"><button class="btn-connexion">Connexion</button></a>
    </nav>