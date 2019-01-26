<div class="blog-post">
<!-- BEGIN BLOG POST	 -->
  <a  class="featured-image" href="<?php the_permalink(); ?>">
  	<div class="image-wrapper">
	  <?php echo the_post_thumbnail(); ?>
	</div>
  </a>
  <div id="title-summary">
    <a href="<?php the_permalink(); ?>"><div class="title"><p><?php the_title(); ?></p></div></a>
    <div class="summary"><p><?php the_content(); ?></p></div>
  </div>
<!-- END BLOG POST -->
</div>
