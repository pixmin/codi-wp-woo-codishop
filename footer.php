</div><!-- .container -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <?php get_template_part('template-parts/footer', 'menu'); ?>
            </div>
            <div class="col-4">
                <?php get_template_part('template-parts/footer', 'about'); ?>
            </div>
            <div class="col-4">
                <?php get_template_part('template-parts/footer', 'newsletter'); ?>
            </div>
        </div><!-- .row -->
        <p>Proudly powered by <a href="">Wordpress</a> | Designed by <a href="">CodinCamp</a></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>