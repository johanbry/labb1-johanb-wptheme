<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                    ?>
                            <div class="hero">
                                <?php the_post_thumbnail('full'); ?>
                                <div class="text">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>