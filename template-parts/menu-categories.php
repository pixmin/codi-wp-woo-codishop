<nav class="categories">
    <ul><?php

        $orderby = 'name';
        $order = 'asc';
        $hide_empty = false ;
        $cat_args = array(
            'orderby'    => $orderby,
            'order'      => $order,
            'hide_empty' => $hide_empty,
            'exclude' => array(15, 19)
        );
         
        $product_categories = get_terms('product_cat', $cat_args);
         
        if (!empty($product_categories)) {
            foreach ($product_categories as $key => $category) {
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