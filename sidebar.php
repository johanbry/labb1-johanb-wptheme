<div id="sidebar">
    <ul>
        <li>
            <?php get_search_form(); ?>
        </li>
    </ul>
    <ul role="navigation">
        <li class="pagenav">
            <?php dynamic_sidebar('aside-section-1'); ?>
        </li>
        <li>
            <?php dynamic_sidebar('aside-section-2'); ?>

        </li>
        <li class="categories">
            <?php dynamic_sidebar('aside-section-3'); ?>
        </li>
    </ul>
</div>