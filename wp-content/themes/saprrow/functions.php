<?php
    add_action( 'wp_enqueue_scripts', 'style_theme' );
    add_action( 'wp_footer', 'scripts_theme' );
	add_action( 'after_setup_theme', 'theme_register_nav_menu' );
    add_action( 'widgets_init', 'register_my_widgets' );

    function register_my_widgets(){
    	register_sidebar( array(
    		'name'          => 'Left Sidebar',
    		'id'            => "left_sidebar",
    		'description'   => 'Описание моего сайдбара',
		    'before_widget' => '<div class="widget %2$s">',
		    'after_widget'  => "</div>\n",
		    'before_title'  => '<h5 class="widgettitle">',
		    'after_title'   => "</h5>\n"
    	) );
    }

	function theme_register_nav_menu() {
		register_nav_menu( 'top', 'Меню в шапке' );
	}

    function style_theme() {
        wp_enqueue_style('style', get_stylesheet_uri());

        wp_enqueue_style( 'luboeslovo', get_template_directory_uri() . '/essets/css/default.css' );
        wp_enqueue_style( 'layout', get_template_directory_uri() . '/essets/css/layout.css' );
        wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/essets/css/media-queries.css' );
    }

    function scripts_theme() {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js' );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/essets/js/flexslider.js', ['jquery'], null, true);
        wp_enqueue_script( 'doubletaptogo', get_template_directory_uri() . '/essets/js/doubletaptogo.js', ['jquery'], null, true);
        wp_enqueue_script( 'init', get_template_directory_uri() . '/essets/js/init.js', ['jquery'], null, true);
        wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/essets/js/modernizr.js', null, null, false );
    }
