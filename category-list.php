<?php
/**
 * Category List
 *
 * Displays a list on home page of all category titles.
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
?>

<!-- Loops through categories and presents links to each one -->

<!-- Need a way for user to enter images -->


<?php
		$categories = get_categories( array(
				'orderby' => 'ID',
				'parent'  => 0
		) );
    foreach($categories as $category){
			//print_r( $counter );
			// Get the ID of a given category
	    $category_id = $category->term_id;
			$category_name = get_cat_name( $category_id );

	    // Get the URL of this category
	    $category_link = get_category_link( $category_id );
			$category_desc = category_description( $category_id );
			?>
						<!-- BEGIN BLOG POST	 -->
			<div class="blog-post">
			  <a  class="featured-image" href="<?php echo esc_url( $category_link ); ?>">
			  	<div class="image-wrapper">
				  <img src="<?php echo get_stylesheet_directory_uri(); ?>/category-images/<?php echo $category->category_nicename; ?>.jpg" alt="">
				</div>
			  </a>
			  <div id="title-summary">
			    <a href="<?php echo esc_url( $category_link ); ?>">
						<div class="cat-title"><p><?php echo $category_name; ?></p></div>
					</a>
					<div class="summary"><p><?php the_content(); ?></p></div>
			  </div>

			</div>
				<!-- END BLOG POST -->
    <?php
        }
				// END foreach
?>
