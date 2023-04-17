<footer id="footer">
    <div class="container">
        <div class="row top">
            <?php /* Definiera var de olika widget-områdena ska vara. */ ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <?php dynamic_sidebar('footer-section-1'); ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php dynamic_sidebar('footer-section-2'); ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php dynamic_sidebar('footer-section-3'); ?>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <?php dynamic_sidebar('footer-section-4'); ?>
            </div>
        </div>
    </div>
</footer>

</div>

<?php wp_footer() ?>

</body>

</html>