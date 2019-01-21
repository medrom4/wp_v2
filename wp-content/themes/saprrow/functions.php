<?php
    add_action( 'wp_enqueue_scripts', 'style_theme' );
    add_action( 'wp_footer', 'scripts_theme' );

    function style_theme() {
        wp_enqueue_style('style', get_stylesheet_uri());

        wp_enqueue_style( 'luboeslovo', get_template_directory_uri() . '/essets/css/default.css' );
        wp_enqueue_style( 'layout', get_template_directory_uri() . '/essets/css/layout.css' );
        wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/essets/css/media-queries.css' );
    }

    function scripts_theme() {
        wp_enqueue_script( 'init', get_template_directory_uri() . '/essets/js/init.js');
    }
