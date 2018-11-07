<div id="product-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <?php

        // Get the latest 3 products from category 'home'
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 3,
            'product_cat' => 'home'
        );

        $loop = new WP_Query($args);

        global $first_slide;
        $first_slide = true;

        while ($loop->have_posts()) : $loop->the_post();
            
            get_template_part('template-parts/product', 'slideshow');

        endwhile;

        wp_reset_postdata();

    ?>
    </div>
    <a class="carousel-control-prev" href="#product-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#product-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
