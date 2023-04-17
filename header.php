<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title><?= get_bloginfo(); ?></title>

    <?php wp_head(); ?>
</head>

<body>

    <div id="wrap">

        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-sm-6">
                        <?php
                        /* Använd custom logo feature som gör att man i admin kan lägga in logo. Om ingen logo är inlagd visas sajtens namn med länk till startsidan.*/
                        ?>
                        <a href="<?php echo get_home_url();  ?>" class="logo">
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            if (has_custom_logo()) {
                                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                            } else {
                                echo get_bloginfo('name');
                            }
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <?php /* Skriv ut Wordpress default sökformulär */  ?>
                        <?php get_search_form(); ?>
                    </div>
                    <div class="col-xs-4 text-right visible-xs">
                        <div class="mobile-menu-wrap">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-bars menu-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobile-search">
            <form id="searchform" class="searchform">
                <?php get_search_form(); ?>
            </form>
        </div>

        <nav id="nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php /* Definiera var header-menu placering. */ ?>
                        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    </div>
                </div>
            </div>
        </nav>