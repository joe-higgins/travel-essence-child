<!DOCTYPE html>

<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="blog-menu">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- contents of the loop -->

      <?php get_template_part( 'content', get_post_format() ); ?>

      <?php
      if ( has_post_thumbnail() ) {
          $featured_image = get_the_post_thumbnail();
      } ?>

    <?php endwhile; endif; ?>
</div>
<!-- end blog-menu -->
<?php get_footer(); ?>
