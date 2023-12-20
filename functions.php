<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');
// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');
// Ajouter un menu dans apprence
add_theme_support('menus');


function scripts_loader()
{
    // Enregistrement des styles
    wp_enqueue_style('Inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap');
    wp_enqueue_style('remixicon', 'https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css');
    wp_enqueue_style('unicon', 'https://unicons.iconscout.com/release/v4.0.0/css/line.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/app.css', array('bootstrap'), '1');
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', false, '1', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/main.js', false, '1', true);
}

add_action('wp_enqueue_scripts', 'scripts_loader');

/* Gestion menus */
register_nav_menu('header', 'En tête du menu');
function bewell_menu_class($classes)
{
    $classes[] = 'nav-item';
}

function bewell_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-item';
}

add_filter('nav_menu_css_class', 'bewell_menu_class');
add_filter('nav_menu_link_attributes', 'bewell_menu_link_class');
