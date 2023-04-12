<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            the_title('<h1>', '</h1>');
                            the_content();
                        }
                    }
                    ?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
                    <?php wp_nav_menu(array('theme_location' => 'aside-menu', 'menu_class' => 'side-menu', 'items_wrap' => '<ul class="%2$s">%3$s</ul>', 'container' => '')); ?>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>