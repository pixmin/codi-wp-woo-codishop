<section>
    <h4>About</h4>
    <?php

    // Content from About page
    $post = get_post(57);
    echo apply_filters('the_exceprt', $post->post_excerpt);

    ?>
</section>