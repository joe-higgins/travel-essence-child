
<div class="blog-post">
  <a  class="featured-image" href="<?php the_permalink(); ?>">
  <?php echo the_post_thumbnail(); ?>
  </a>
  <div class="title-summary">
    <a href="<?php the_permalink(); ?>"><div class="title"><p><?php the_title(); ?></p></div></a>
    <div class="summary"><p><?php the_content(); ?></p></div>
  </div>
</div>
