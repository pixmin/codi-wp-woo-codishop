<?php

    global $first_slide;

    $class = '';
    
    if ($first_slide === true) {
        $class = ' active';
        $first_slide = false;
    }

?>
<div class="carousel-item<?php echo $class ?>">
    
    <a href="<?php the_permalink(); ?>">
    <?php

        echo woocommerce_get_product_thumbnail();
        the_title();

    ?>
    </a>

</div>
