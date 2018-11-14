<nav class="categories">
    <ul><?php

        $args = array(
            'orderby'    => 'name',
            'order'      => 'asc',
            'hide_empty' => false,
            'exclude' => array(15, 19)
        );
         
        $product_cats = get_terms('product_cat', $args);
         
        if (!empty($product_cats)) {
            foreach ($product_cats as $category) {
                echo '<li>';
                echo '<a href="'.get_term_link($category).'" >';
                echo $category->name;
                echo '</a>';
                echo '</li>';
            }
        }
    
        ?>
        <li class="float-right"><a href="/shop">All products</a></li>
    </ul>
</nav>