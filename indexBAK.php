<!DOCTYPE html>
<html>
  <head>
    <meta>
    <link rel="stylesheet" href="style.css">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <?php wp_head();?>
  </head>
  <body>
    <div class="full-page-wrap"><!--  I MAY NOT NEED THIS WRAP!! -->
      <div class="grid-wrap">
        <header id="caitlins-blog-header"> <!--  background image in style.css -->
          <img src="images/banner.png" alt="Travel Essence by Caitlin Humphreys">
            <!-- <div id="blog-title">Travel Essence</div>
            <p id="author">By Caitlin Humphreys</p> -->
        </header>
        <!-- <nav id="nav"></nav> -->
          <a id="ts-logo" href="http://www.travelsommelier.com" target="_blank"></a>
          <aside id="quote"><em><p>Sharing beautiful things that I have discovered in my travels around the world.</p></em></aside>
        <!-- </nav> -->
        <section id="caitlin-statement">
          <div id="caitlin"><img src="images/caitlin.png" alt="Caitlin"></div>
          <div id="statement"><p>My husband Darren and I are fortunate enough to travel around the world. In my journeys, I&apos;ve uncovered experiences and items that simply need to be shared. This blog is devoted to these discoveries, the ones that capture the essence of the places we visit. If you ever  nd yourself in that same destination or are just shopping online, you too can  nd the best the world has to offer.</p></div>
        </section>
        <section id="blog-menu">
          <article class="blog-post">
            <div class="featured-image"><img src="images/skin-care.png" /></div>
            <div class="title-summary">
              <div class="title"><p>Skin Care</p></div>
              <div class="summary"><p></p></div>
            </div>
          </article>
          <!-- Dummy articles remove before converting to WP -->
          <article class="blog-post">
            <div class="featured-image"><img src="images/resort-wear.jpg" /></div>
            <div class="title-summary">
              <div class="title"><p>Resort Wear</p></div>
              <div class="summary"><p>From the islands</p></div>
            </div>
          </article>
          <article class="blog-post">
            <div class="featured-image"><img src="images/treats.png" /></div>
            <div class="title-summary">
              <div class="title"><p>Treats</p></div>
              <div class="summary"><p></p></div>
            </div>
          </article>

           <!-- end dummy articles -->
        </section>
        <!-- end blog-menu -->
        <footer id="footer">
          <div>FOOTER</div>
        </footer>
      </div> <!-- end grid wrap -->
    </div> <!--  I MAY NOT NEED THIS WRAP!! --><!-- end full page wrap -->
<?php wp_footer(); ?>
  </body>
</html>
