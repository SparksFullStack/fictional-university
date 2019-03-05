<?php
    function university_files() { // this function loads all JS and CSS files
        wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    };
    add_action('wp_enqueue_scripts', 'university_files'); // first arg loads the CSS files, second is a callback we define
?>