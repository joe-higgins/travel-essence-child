<!DOCTYPE html>

<?php
/**
 * Home
 *
 * Displays the default home page
 *
 * @package      Travel Essence
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
	<h1>HOME.php</h1>

			<!-- =================== -->
<?php
			$categories = get_categories( $args );

        foreach ($categories as $category) {

						$category_id = get_cat_ID($category->slug);
						$category_link = get_category_link( $category_id );
						echo $category_id;
            ?>
            <div class="<?php echo $category->slug; ?>">
                <!-- Get the category title -->
                <a href="<?php $category_link ?>"<h3 class="title"><?php echo $category->name; ?> : <?php echo $category_id; ?></h3></a>

                <!-- Get the category description -->
                <div class="description">
                    <p><?php echo category_description( get_category_by_slug($category->slug)->term_id ); ?></p>
                </div>
								<?php
				}
?>
		<!-- =================== -->
<?php wp_list_categories('show_count=0&title_li=<h2>Categories</h2>'); ?>

		<!-- =================== -->

	<?php
	  // Get the ID of a given category
	  $category_id = get_cat_ID( 'Wine and Food' );

	  // Get the URL of this category
	  $category_link = get_category_link( $category_id );
	?>

	<!-- Print a link to this category -->
	<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">Category Name</a>

			<!-- =================== -->

	<div class="blog-post">
	<!-- BEGIN BLOG POST	 -->
	  <a  class="featured-image" href="<?php the_permalink(); ?>">
	  	<div class="image-wrapper">
		  <?php echo the_post_thumbnail(); ?>
		</div>
	  </a>
	  <div id="title-summary">
	    	<a href="<?php echo esc_url( $category_link ); ?>" class="title" title="Category Name">Wine and Food</a>
	    <div class="summary"><p><?php the_content(); ?></p></div>
	  </div>
	<!-- END BLOG POST -->
	</div>
	<!-- =================== -->


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