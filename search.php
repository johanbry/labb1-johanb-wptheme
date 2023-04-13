		<?php get_header(); ?>
		<main>
		    <section>
		        <div class="container">
		            <div class="row">
		                <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
		                    <h1>Sökresultat för: <?php the_search_query(); ?></h1>
		                    <div class="searchform-wrap">
		                        <?php get_search_form(); ?>
		                    </div>
		                    <?php if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
                                    get_template_part('template-parts/content', 'excerpt');
                                }
                            }
                            the_posts_pagination(); ?>
		                </div>
		            </div>
		        </div>
		    </section>
		</main>
		<?php get_footer(); ?>