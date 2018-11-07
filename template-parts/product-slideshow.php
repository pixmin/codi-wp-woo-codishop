<?php

    global $first_slide;

    $class = '';
    
    if ($first_slide === true) {
        $class = ' active';
        $first_slide = false;
    }

?>
<div class="carousel-item<?php echo $class ?>">
    
    <?php echo woocommerce_get_product_thumbnail(); ?>
    <h3><?php the_title(); ?></h3>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">
        Voir
    </a>

</div>
