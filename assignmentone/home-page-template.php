<?php 

/**
 * Template Name: Homepage Template
 * Template Post Type: page
 */

get_header(); ?>

<main id="main-hp-content" class="hp-content">
    <h1>My Clay Figurines</h1>
    <p>Hi, I'm Mirka and I like making oven bake clay figurines! So far I have made a rat and an isopod.</p>

    <?php 
    // while loop
    while (have_posts() ): the_post();
                           the_content();
    endwhile;
    ?>

</main>
<?php get_footer(); ?>