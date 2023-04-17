<?php

/**>
 * 
 *  Template part for dosplaying post meta info.
 * 
 */
?>

<ul class="meta">
    <li>
        <?php /* Skriv ut när inlägget skapats enligt angivet format. */ ?>
        <i class="fa fa-calendar"></i><?php the_time('j F, Y'); ?>
    </li>
    <li>
        <?php /* Skriv ut länk till sida med författarens alla posts. */ ?>
        <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
    </li>
    <li>
        <?php /* Skriv ut länkar till alla kategorier för inlägget (separerade med kommatecken). */ ?>
        <i class="fa fa-tag"></i> <?php the_category(', '); ?>
    </li>
</ul>