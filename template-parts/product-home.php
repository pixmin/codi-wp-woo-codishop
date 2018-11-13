<?php

global $product;

?>
<article>
    <a href="<?php echo $product->get_permalink(); ?>">
        <?php echo woocommerce_get_product_thumbnail(); ?>
        <p><?php echo $product->get_name(); ?></p>
    </a>
</article>
