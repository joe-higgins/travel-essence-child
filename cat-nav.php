<?php 
<nav id="cat-nav">
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
</nav>
