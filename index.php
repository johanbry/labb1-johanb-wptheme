		<?php get_header(); ?>
		<main>
		    <section>
		        <div class="container">
		            <div class="row">
		                <div id="primary" class="col-xs-12 col-md-9">
		                    <h1><?php wp_title(''); ?></h1>

		                    <?php
                            if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
                            ?>
		                            <article>
		                                <?php the_post_thumbnail('large'); ?>
		                                <h2>
		                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		                                </h2>
		                                <ul class="meta">
		                                    <li>
		                                        <i class="fa fa-calendar"></i><?php the_time('j F, Y'); ?>
		                                    </li>
		                                    <li>
		                                        <i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author_posts_link(); ?></a>
		                                    </li>
		                                    <li>
		                                        <i class="fa fa-tag"></i> <?php the_category(', '); ?>
		                                    </li>
		                                </ul>
		                                <?php the_excerpt(); ?>
		                            </article>
		                    <?php
                                }
                            }
                            ?>
		                    <?php the_posts_pagination(); ?>
		                </div>
		                <aside id="secondary" class="col-xs-12 col-md-3">
		                    <?php get_sidebar(); ?>
		                </aside>
		            </div>
		        </div>
		    </section>
		</main>
		<?php get_footer(); ?>