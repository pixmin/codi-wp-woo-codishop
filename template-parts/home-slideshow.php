<?php

// Get the latest 3 products from category 'home'
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 3,
    'product_cat' => 'home'
);

$loop = new WP_Query($args);

while ($loop->have_posts()) : $loop->the_post();
    
    echo '<article>';
    echo '<a href="'.get_permalink().'">';
    echo woocommerce_get_product_thumbnail();
    echo get_the_title();
    echo '</a>';
    echo '</article>';

endwhile;

wp_reset_postdata();

?>