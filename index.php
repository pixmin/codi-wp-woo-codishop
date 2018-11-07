<?php

get_header();

?>
<main>
<?php

    if (have_posts()) : while (have_posts()) : the_post();

        ?>
        <h2><?php the_title(); ?></h2>
        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
        <p><?php the_content(__('(more...)')); ?></p>
        <?php

    endwhile; else:

        ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php

    endif;

    get_sidebar();

    ?>

</main>
<?php

get_footer();