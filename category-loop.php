<?php
//<!-- ============  TESTING CATEGORY PAGE ==================  -->
//<!-- ========= NOT A REAL PAGE/EXCERPT. ONLY FOR STORAGE/TESTING =============== -->
//<!-- Wine and Food -->
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Wine and Food' );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );
		$category_desc = category_description( $category_id );
?>


<div class="blog-post">
<!-- BEGIN BLOG POST	 -->
  <a  class="featured-image" href="<?php echo esc_url( $category_link ); ?>">
  	<div class="image-wrapper">
	  <img src="<?php echo get_stylesheet_directory_uri(); ?>/category-images/wine-and-food.jpg" alt="">
	</div>
  </a>
  <div id="title-summary">
    <a href="<?php echo esc_url( $category_link ); ?>"><div class="title"><p>Wine and Food</p></div></a>
    <div class="summary"><p><?php the_content(); ?></p></div>
  </div>
<!-- END BLOG POST -->
</div>


<?php
$categories = get_the_category();
foreach ( $categories as $category ) {
    echo '<img src="' . esc_url( 'http://example.com/images/' . intval( $category->term_id ) . '.jpg' ) . '" alt="' . esc_attr( $category->name ) . '" />';
}
?>
<?php
		$categories = get_categories( array(
				'orderby' => 'ID',
				'parent'  => 0
		) );
    foreach($categories as $category){
        echo $category->name."<br>";
        echo category_description($category);
        }
?>


<?php
		$categories = get_categories( array(
				'orderby' => 'ID',
				'parent'  => 0
		) );
    foreach($categories as $category){
			?>
			<div class="blog-post">
			<!-- BEGIN BLOG POST	 -->
			  <a  class="featured-image" href="<?php the_permalink(); ?>">
			  	<div class="image-wrapper">
				  <?php echo the_post_thumbnail(); ?>
				</div>
			  </a>
				<div id="title-summary">
			    <a href="<?php get_category_link($category_id); ?>"><div class="title"><p><?php echo $category->name; ?></p></div></a>
			    <div class="summary"><p><?php echo category_description($category); ?></p></div>
			  </div>
				<!-- END BLOG POST -->
				</div>
    <?php
        }
?>





<?php
		$categories = wp_list_categories( array(
				'order' => 'DESC',
				'parent'  => 0
		) );
    foreach($categories as $category){
        echo $category->name."<br>";
        echo category_description($category);
        }
?>

<?php


$categories = get_categories( array(
    'orderby' => 'name',
    'parent'  => 0
) );

foreach ( $categories as $category ) {
    printf( '<a href="%1$s">%2$s</a><br />',
        esc_url( get_category_link( $category->term_id ) ),
        esc_html( $category->name )
    );
}
?>

<!-- ============  END TESTING CATEGORY PAGE ==================  -->
