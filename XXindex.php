<!DOCTYPE html>
<?php get_header(); ?>
<section id="front-page-content">
<?php get_sidebar(); ?>

  <div id="post-list" class="">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- contents of the loop -->

      <?php get_template_part( 'content', get_post_format() ); ?>

      <?php
      if ( has_post_thumbnail() ) {
          $featured_image = get_the_post_thumbnail();
      } ?>

    <?php endwhile; endif; ?>
  </div>
</section>
<!-- end blog-menu -->
<?php get_footer(); ?>
