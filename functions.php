<?php

// Active les fonctionnalités du thème
function montheme_supports() {
    add_theme_support('title-tag');
}


// Charger les css
function charger_les_css() {
    // style.css
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0', 'all');

    // CSS Bootstrap
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');

    // JS Popper
    wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array(), null, true);

    // JS Bootstrap
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js', array('popper-js'), null, true);
}


//fonction du titre



add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'charger_les_css');

