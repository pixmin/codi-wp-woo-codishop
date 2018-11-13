<section class="home-products"><?php

$args = array(
    'post_type' => 'product',
    'posts_per_page' => 6,
    'order' => 'rand',
    'orderby' => 'rand'
);

$loop = new WP_Query($args);

while ($loop->have_posts()) : $loop->the_post();

    get_template_part('template-parts/product', 'home');

endwhile;

wp_reset_postdata();

?></section>