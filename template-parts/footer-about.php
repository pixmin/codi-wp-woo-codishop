<section>
    <h4>About</h4>
    <?php

    // Content from About page (2 options)
    
    // By name:
    // $post = get_page_by_title('About');
    
    // By id:
    $post = get_post(57);

    echo apply_filters('the_exceprt', $post->post_excerpt);

    ?>
</section>