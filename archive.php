		<?php get_header(); ?>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<?php /* En egenskriven funktion i functions php som formaterar rubrik. */ ?>
							<h1><?= get_archive_title(); ?></h1>
							<?php
							/*
							The Loop som skriver ut alla matchande inlägg.
							*/
							?>
							<?php if (have_posts()) {
								while (have_posts()) {
									the_post();
									/* Använd template part som skriver ut en sammanfattning av inlägget. */
									get_template_part('template-parts/content', 'excerpt');
								}
							}
							/* Sidpaginering om inte alla inlägg får plats på en sida. */
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