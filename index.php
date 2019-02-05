<?php
/**
 * Home
 *
 * Displays the default home page
 *
 * @package      travel-essence
 * @license      license.txt
 * @copyright    2019 Joe Higgins
 * @since        0.0.1
 *
 * Please do not edit this file.
 */
// 1/28/19 - Currently not used in this theme //
// home.php is coded to display category list on home page //

get_header(); ?>
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
<?php get_footer();
