		<?php get_header(); ?>
		<main>
		    <section>
		        <div class="container">
		            <div class="row">
		                <div id="primary" class="col-xs-12 col-md-9">

		                    <h1><?= get_queried_object()->post_title ?></h1>

		                    <?php if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
                                    get_template_part('template-parts/content', 'excerpt');
                                }
                            }
                            the_posts_pagination(); ?>
		                </div>
		                <aside id="secondary" class="col-xs-12 col-md-3">
		                    <?php get_sidebar(); ?>
		                </aside>
		            </div>
		        </div>
		    </section>
		</main>
		<?php get_footer(); ?>