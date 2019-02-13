<?php

////////////////////////////////////////
/////////////////////МЕНЮ///////////////
    add_action( 'after_setup_theme', 'theme_register_nav_menu' );
    function theme_register_nav_menu() {
		register_nav_menu( 'top', 'Меню в шапке' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails', array( 'post', 'portfolio' ) );
		add_theme_support( 'post-formats', array( 'video', 'aside' ) );
		add_image_size( 'post_thumb', 1300, 500, true);
		
    add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
    function my_navigation_template( $template, $class ){
	    return '<nav class="navigation %1$s" role="navigation">
		        <div class="nav-links">%3$s</div>
		    </nav>';
        } the_posts_pagination( array(
	       'end_size' => 2, ) ); 
    }