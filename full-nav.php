<!-- Navigation code -->
<?php
   $current_category = get_the_category();
   //$current_category[0]->term_id; used to access first array in nested array.
   //may need to rework this if there are problems later!
   $category_id = $current_category[0]->term_id;
  $category_name = get_cat_name( $category_id );

  // Get the URL of this category
  $category_link = get_category_link( $category_id );
  $category_desc = category_description( $category_id );
?>

<nav id="full-nav">
  <div class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></div>
  <div class="dropdown nav-item">
    <a class="dropdown-toggle" data-toggle="dropdown">Other categories
      <span class="caret"></span></a>

      <ul class="dropdown-menu">
      <?php
      $cats = get_categories( array(
          'orderby' => 'ID',
          'parent'  => 0
      ) );
      foreach($cats as $cat){
        //print_r( $counter );
        // Get the ID of a given category
        $cat_id = $cat->term_id;
        $cat_name = get_cat_name( $cat_id );

        // Get the URL of this category
        $cat_link = get_category_link( $cat_id );
        $category_desc = category_description( $cat_id );
        ?>
    <li class=""><a href="<?php echo esc_url( $cat_link ); ?>"><?php echo $cat_name; ?></a></li>
    <?php
  }
     ?>

    </ul>
  </div>

  <div class="nav-item"><a href="<?php echo esc_url( $category_link ); ?>">Back to: <?php echo $category_name; ?></a></div>
  <div class="nav-item">
    <?php previous_post_link('&laquo; %link', '%title', true); ?>
  </div>
  <div class="nav-item">
  <?php next_post_link('%link &raquo;', '%title', true); ?>
  <?php /* next_post_link('%link', 'Next post in category', TRUE); */ ?>
  </div>

</nav>
