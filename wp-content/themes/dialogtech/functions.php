<?php

    //enqueue stylesheets
    function dialogtech_theme_styles() {

        wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css');

        wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');

        wp_enqueue_style( 'stlye', get_stylesheet_uri() );

        wp_enqueue_style ('https://fonts.googleapis.com/css?family=Lato|Raleway|Roboto+Condensed|Roboto+Slab|Roboto:300,400,700');

        wp_enqueue_script('dialogtech_script', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'),'3.3.7', true);

        wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true);

        wp_enqueue_style( 'slick-slider-styles', get_stylesheet_directory_uri() . '/css/slick-theme.css' );

        wp_enqueue_style( 'slick-slider-theme-styles', get_stylesheet_directory_uri() . '/css/slick.css' );

        wp_enqueue_script('slick-slider-js', get_stylesheet_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );

    }
    add_action('wp_enqueue_scripts', 'dialogtech_theme_styles');



    //add menu
    register_nav_menus ( array(
        'main_menu' => __('Main Menu','dialogtech'),
        'secondary_menu' => __('Seconday Menu', 'dialogtech'),
        'footer_menu' => __('Footer Menu', 'dialogtech')
    ) );
