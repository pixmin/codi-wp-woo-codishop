<?php

// Get the latest 3 products from category 'home'
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 3,
    'product_cat' => 'home'
);

$loop = new WP_Query($args);

while ($loop->have_posts()) : $loop->the_post();
    
    get_template_part('template-parts/product', 'slideshow');

endwhile;

wp_reset_postdata();

?>