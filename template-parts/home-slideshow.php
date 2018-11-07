<div id="product-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <?php

        global $first_slide;
        global $product;

        $first_slide = true;

        // Get the latest 3 products from category 'home'

        // V1 & V2
        $args = array(
            'limit' => 3,
            'category' => 'home',
        );

        // V1 - WC_Product_Query
        // $query = new WC_Product_Query($args);
        // $products = $query->get_products();

        // V2 - wc_get_products
        $products = wc_get_products($args);

        foreach ($products as $product) {
            get_template_part('template-parts/product-bis', 'slideshow');
        }

        // V3 - WP_Query

        // $args = array(
        //     'post_type' => 'product',
        //     'posts_per_page' => 3,
        //     'product_cat' => 'home'
        // );

        // $loop = new WP_Query($args);

        // while ($loop->have_posts()) : $loop->the_post();

        //     get_template_part('template-parts/product', 'slideshow');

        // endwhile;

        // wp_reset_postdata();

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
