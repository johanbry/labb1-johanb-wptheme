<?php
/*
 Template part for displaying a post
*/
?>

<article>
    <?php /* Hämta adressen till den utvalda bilden i storlek large */ ?>
    <img src="<?php the_post_thumbnail_url('large'); ?>">
    <h2>
        <?php /* Använd template part som skriver ut meta-info för inlägget */ ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <?php /* Använd template part som skriver ut meta-info för inlägget */ ?>
    <?php get_template_part('template-parts/post', 'meta'); ?>
    <?php /* Skriv ut inläggets innehåll. */ ?>
    <?php the_content(); ?>
</article>