<!DOCTYPE html>
<?php get_header(); ?>


<!-- <section id="single-post"> -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- contents of the loop -->

    <?php get_template_part( 'single-content', get_post_format() ); ?>
      

  <?php endwhile; endif; ?>
<!-- </section> -->
<!-- end blog-menu -->
<?php get_footer(); ?>
