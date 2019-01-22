
  <article class="post-index-item">
    <a href="<?php the_permalink(); ?>">
      <div class="featured-image"><?php echo the_post_thumbnail(); ?></div>
    </a>
    <div class="title-summary">
      <a href="<?php the_permalink(); ?>"><div class="title"><p><?php the_title(); ?></p></div></a>

      <div class="summary"><p><?php the_content(); ?></p></div>
    </div>
  </article>
