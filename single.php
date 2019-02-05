<?php
/**
 * Single
 *
 *
 *
 * @link http://www.joehiggins.me
 *
 * @package      travel-essence
 * @license      license.txt
 * @copyright    2019 Joe Higgins
 * @since        0.0.1
 *
 * Please do not edit this file.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
?>
<?php get_header(); ?>


<!-- <section id="single-post"> -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- contents of the loop -->

    <?php get_template_part( 'single-content', get_post_format() ); ?>


  <?php endwhile; endif; ?>
<!-- </section> -->
<!-- end blog-menu -->
<?php get_footer(); ?>
