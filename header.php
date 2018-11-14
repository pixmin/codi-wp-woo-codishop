<?php

$mem_start = memory_get_usage();

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><?php echo get_bloginfo('name'); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent justify-content-center">
            <?php

                wp_nav_menu(array(
                    'container' => '',
                    'menu' => 'Top Menu',
                    'menu_class' => 'nav navbar-nav mx-auto',
                    // 'container' => 'nav',
                ));

            ?>
            <ul class="nav navbar-nav">
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
            </ul>
            </div>
        </nav>

        <?php

        if (is_front_page()) {

            get_template_part('template-parts/home', 'slideshow');

        }

        ?>
    </div>
</header>

<div class="container">
