<?php

// Formatera rubrik till archive
function get_archive_title()
{
    $title = wp_title('', false);

    if (is_year()) {
        $title  = get_the_date(_x('Y', 'yearly archives date format'));
    } elseif (is_month()) {
        $title  = get_the_date(_x('F Y', 'monthly archives date format'));
        $title = ucfirst($title);
    } elseif (is_day()) {
        $title  = get_the_date(_x('F j, Y', 'daily archives date format'));
    }
    return 'Arkiv: ' . $title;
}

// Lägg till temasupport för olika funktioner
function johanb_theme_setup()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'johanb_theme_setup');

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

// Registrera menyer
function johanb_register_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header menu'),
            'aside-menu' => __('Aside menu')
        )
    );
}

add_action('after_setup_theme', 'johanb_register_menus');

// Registrera sidebars
function johanb_register_sidebars()
{
    register_sidebar(
        array(
            'id'            => 'aside-section-1',
            'name'          => __('Aside sidebar first section'),
            'description'   => __('First section in the sidebar.'),
            'before_widget' => '<ul><li>',
            'after_widget'  => '</li></ul>',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
    register_sidebar(
        array(
            'id'            => 'aside-section-2',
            'name'          => __('Aside sidebar second section'),
            'description'   => __('Second section in the sidebar.'),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
    register_sidebar(
        array(
            'id'            => 'aside-section-3',
            'name'          => __('Aside sidebar third section'),
            'description'   => __('Third section in the sidebar.'),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
    register_sidebar(
        array(
            'id'            => 'aside-section-4',
            'name'          => __('Aside sidebar fourth section'),
            'description'   => __('Fourth section in the sidebar.'),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
    register_sidebar(
        array(
            'id'            => 'footer-section-1',
            'name'          => __('Footer first section'),
            'description'   => __('First section/column in the footer.'),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer-section-2',
            'name'          => __('Footer second section'),
            'description'   => __('Second section/column in the footer.'),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer-section-3',
            'name'          => __('Footer third section'),
            'description'   => __('Third section/column in the footer.'),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer-section-4',
            'name'          => __('Footer fourth section'),
            'description'   => __('Fourth section/bottom row in the footer.'),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
}

// Koppla registrering av sidebars till hook
add_action('widgets_init', 'johanb_register_sidebars');

// Change the pagination markup to match with css rules
function johanb_pagination_output($template)
{

    $template = '
	<nav class="navigation %1$s" aria-label="%4$s">
    <h2 class="screen-reader-text">%2$s</h2>
    %3$s</nav>';

    return $template;
}

add_filter('navigation_markup_template', 'johanb_pagination_output', 99, 2);
