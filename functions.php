<?php

// Lägg till alla stylesheets
function johanb_add_styles()
{
    wp_enqueue_style(
        'font-awesome',
        get_template_directory_uri() . '/css/font-awesome.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . '/css/bootstrap.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/css/style.css',
        array('font-awesome', 'bootstrap'),
        false,
        'all'
    );
}

// Koppla funktion för att lägga till stylesheets till hook
add_action('wp_enqueue_scripts', 'johanb_add_styles');

// Lägg till alla javascript-filer
function johanb_add_scripts()
{
    wp_enqueue_script(
        'jquery',
        get_template_directory_uri() . '/js/jquery.js',
        array(),
        false,
        false
    );

    wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/js/script.js',
        array('jquery'),
        false,
        true
    );
}

// Koppla funktion för att lägga till scripts till hook
add_action('wp_enqueue_scripts', 'johanb_add_scripts');

// Registrera sidebars
function johanb_register_sidebars()
{
    register_sidebar(
        array(
            'id'            => 'footer-section-1',
            'name'          => __('Footer first section'),
            'description'   => __('First section/column in the footer.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer-section-2',
            'name'          => __('Footer second section'),
            'description'   => __('Second section/column in the footer.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer-section-3',
            'name'          => __('Footer third section'),
            'description'   => __('Third section/column in the footer.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

// Koppla registrering av sidebars till hook
add_action('widgets_init', 'johanb_register_sidebars');
