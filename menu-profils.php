<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="<?php echo $metaDescription; ?>">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="<?php echo $metaKeywords; ?>">
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
        <a href="<?= home_url('/profil-utilisateur'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo" /></a>
      </div>
      <a href="<?= home_url('/deconnexion'); ?>"><button class="btn-connexion">Se déconnecter</button></a>
    </nav>