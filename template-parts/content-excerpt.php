<?php
/*
 Template part for displaying summary of post in archive and blog summary etc.
*/
?>

<article>
    <img src="<?php the_post_thumbnail_url('large'); ?>">
    <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <?php get_template_part('template-parts/post', 'meta'); ?>
    <?php the_excerpt(); ?>
</article>