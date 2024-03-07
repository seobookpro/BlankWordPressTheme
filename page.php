<?php get_header(); ?>

<div class="container text-center">
  <div class="row align-items-start mt-5 pt-3">


    <div class="col-sm-8">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h1><?php the_title(); ?></h1>
<?php

// check for a Featured Image and then assign it to a PHP variable for later use
if ( has_post_thumbnail() ) {
    $featured_image = get_the_post_thumbnail();
}
echo $featured_image;
?>
<?php the_content(); ?>


    <?php endwhile; else : ?>
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

    </div>


  <div class="col-sm-4">
    <h3>Сайдбар</h3>
    </div>

  </div>
</div>
<?php get_footer(); ?>
