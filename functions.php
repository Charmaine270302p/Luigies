<?php

function load_stylesheets()
{   


    wp_register_style('font', get_template_directory_uri() .'/assets/fonts/beyond_the_mountains-webfont.css', array(), 1, 'all');
    wp_enqueue_style('font');

    wp_register_style('bootstrap', get_template_directory_uri() .'/assets/plugin-frameworks/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('swiper', get_template_directory_uri() .'/assets/plugin-frameworks/swiper.css', array(), 1, 'all');
    wp_enqueue_style('swiper');

    wp_register_style('ionicons', get_template_directory_uri() .'/assets/fonts/ionicons.css', array(), 1, 'all');
    wp_enqueue_style('ionicons');

    wp_register_style('styles', get_template_directory_uri() .'/assets/common/styles.css', array(), 1, 'all');
    wp_enqueue_style('styles');

    wp_register_style('custom', get_template_directory_uri() .'/assets/custom/.css', array(), 1, 'all');
    wp_enqueue_style('custom');

}

add_action('wp_enqueue_scripts','load_stylesheets');



//load scripts

function addjs(){


wp_deregister_script('jquery');

wp_register_script('jquery', get_template_directory_uri().'/assets/plugin-frameworks/jquery-3.2.1.min.js', array(), 1,1,1);
wp_enqueue_script('jquery');

wp_register_script('bootstrap', get_template_directory_uri().'/assets/plugin-frameworks/bootstrap.min.js', array(), 1,1,1);
wp_enqueue_script('bootstrap');

wp_register_script('swiper', get_template_directory_uri().'/assets/plugin-frameworks/swiper.js', array(), 1,1,1);
wp_enqueue_script('swiper');

wp_register_script('scripts', get_template_directory_uri().'/assets/common/scripts.js', array(), 1,1,1);
wp_enqueue_script('scripts');

wp_register_script('custom', get_template_directory_uri().'/custom.js', array(), 1,1,1);
wp_enqueue_script('custom');

}

add_action('wp_enqueue_scripts','addjs');

//

//menu support
add_theme_support('menus');

//register menus
register_nav_menus(

    array(

        'top-menu' => __('Top menu', 'theme'),
        
        )

    );









