<?php
/*
 Template part for displaying summary of post in archive and blog summary etc.
*/
?>

<article>
    <?php /* Hämta adressen till den utvalda bilden i storlek large. */ ?>
    <img src="<?php the_post_thumbnail_url('large'); ?>">
    <h2>
        <?php /* Skriv ut titeln på inlägget och gör den klickbar för att gå till det enskilda inlägget. */ ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <?php /* Använd template part som skriver ut meta-info för inlägget */ ?>
    <?php get_template_part('template-parts/post', 'meta'); ?>
    <?php /* Skriv ut utdraget för inlägget. */ ?>
    <?php the_excerpt(); ?>
</article>