<?php
    get_header();

    // Url for hero image
    $hero_image = wp_get_attachment_image_src(
        get_post_thumbnail_id(get_the_ID()),
        'full'
    );
?>

<!-- Setting image as a hero image -->
<section class="hero-segment" style="background-image: url('<?php echo esc_url($hero_image[0]); ?>');">
 <div>
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section class="main-content">
  <?php the_content(); ?>
</section>
<?php 
  get_footer();
?>