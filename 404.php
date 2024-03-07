<?php get_header(); ?>

<div class="container text-center">
  <div class="row align-items-start mt-5 pt-3">

    <div class="col-sm-8">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1 class="page-title"><?php _e( 'Няма такава Страница', 'moqtema' ); ?></h1>


<?php the_content(); ?>


    <?php endwhile; else : ?>
<p><?php esc_html_e( 'Няма такава Страница.' ); ?></p>
<?php endif; ?>

    </div>


  <div class="col-sm-4">
    <h3>Сайдбар</h3>
    </div>

  </div>
</div>
<?php get_footer(); ?>
