<!DOCTYPE html>

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

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


get_header(); ?>

<?php get_sidebar(); ?>
<div id="blog-menu">

      <?php get_template_part( 'category-list', get_post_format() ); ?>

</div>
<!-- end blog-menu -->
<?php get_footer(); ?>
