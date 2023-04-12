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
