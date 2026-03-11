<?php

function suomijobs_enqueue_assets() {
    wp_enqueue_style('suomijobs-style', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts', 'suomijobs_enqueue_assets');

function suomijobs_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'suomijobs-usa'),
    ));
}
add_action('after_setup_theme', 'suomijobs_theme_setup');

function suomijobs_primary_menu() {
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'nav-links',
        'fallback_cb' => 'suomijobs_fallback_menu'
    ));
}

function suomijobs_fallback_menu() {
    echo '<div class="nav-links">';
    echo '<a href="' . esc_url(home_url('/')) . '">Home</a>';
    echo '<a href="' . esc_url(home_url('/for-employers/')) . '">For Employers</a>';
    echo '<a href="' . esc_url(home_url('/for-candidates/')) . '">For Candidates</a>';
    echo '<a href="' . esc_url(home_url('/services/')) . '">Services</a>';
    echo '<a href="' . esc_url(home_url('/jobs/')) . '">Jobs</a>';
    echo '<a href="' . esc_url(home_url('/contact/')) . '">Contact</a>';
    echo '</div>';
}