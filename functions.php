<?php
// Enqueue stylesheets and scripts
function coming_soon_enqueue_styles()
{
    // Enqueue main stylesheet
    wp_enqueue_style('coming-soon-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'coming_soon_enqueue_styles');