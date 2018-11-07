<?php

    global $first_slide;
    global $product;
    $class = '';
    
    if ($first_slide === true) {
        $class = ' active';
        $first_slide = false;
    }

?>
<div class="carousel-item<?php echo $class ?>">
    
    <?php echo woocommerce_get_product_thumbnail(); ?>
    <h3><?php echo $product->get_name(); ?></h3>
    <p><?php echo $product->get_description(); ?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">
        Voir
    </a>

</div>
