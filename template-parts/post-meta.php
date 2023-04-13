<?php

/**>
 * 
 *  Template part for dosplaying post meta info.
 * 
 */
?>

<ul class="meta">
    <li>
        <i class="fa fa-calendar"></i><?php the_time('j F, Y'); ?>
    </li>
    <li>
        <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
    </li>
    <li>
        <i class="fa fa-tag"></i> <?php the_category(', '); ?>
    </li>
</ul>