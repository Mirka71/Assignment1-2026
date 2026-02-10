<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Character encoding -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- Responsive layout -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

    <!-- Link the stylsheet -->
    <link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/Assignment1-2026/assignmentone/style.css')); ?>">

    
    <body <?php body_class(); ?>>
        <!-- Creating the header -->
        <header class="main-header navbar">
            <a href="<?php echo esc_url(home_url()); ?>">
                <!-- Image -->
                <img src="<?php echo esc_url(home_url('wp-content/themes/Assignment1-2026/assignmentone/ratfigurine.png')); ?>" alt="Image of a clay rat figurine.">
            </a>
<!-- Navbar -->
<nav>
    <?php
        wc_nav_menu(array(
            'menu' => 'main',
            'theme_location' => '',
            'depth' => 2,
            'fallback_cb' => false
        ));
    ?>

</nav>
</header>


