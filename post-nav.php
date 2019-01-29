<nav id="post-nav">
  <div class="nav-item"><a href="<?php echo esc_url( $category_link ); ?>">Back to: <?php echo $category_name; ?></a></div>
  <div class="nav-item">
    <?php previous_post_link('&laquo; %link', '%title', true); ?>
  </div>
  <div class="nav-item">
  <?php next_post_link('%link &raquo;', '%title', true); ?>
  <?php /* next_post_link('%link', 'Next post in category', TRUE); */ ?>
  </div>

</nav>
