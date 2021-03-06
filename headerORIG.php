<!DOCTYPE html>
<html>
  <head>
    <meta>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <!-- description -->
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">

    <?php wp_head();?>
  </head>
  <body>
    <div class="full-page-wrap"><!--  I MAY NOT NEED THIS WRAP!! -->
      <div class="grid-wrap">
        <header id="caitlins-blog-header"> <!--  background image in style.css -->
          <a href="<?php echo get_bloginfo( 'wpurl' );?>">
            <!-- banner image links back to blog home -->
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner.png" alt="Travel Essence by Caitlin Humphreys" />
          </a>
          <!-- <img src="/images/banner.png" alt="Travel Essence by Caitlin Humphreys"> -->
            <!-- <div id="blog-title">Travel Essence</div>
            <p id="author">By Caitlin Humphreys</p> -->
        </header>
        <!-- <nav id="nav"></nav> -->
        <a id="ts-logo" href="http://www.travelsommelier.com" target="_blank"></a>
        <aside id="quote"><em><p>Sharing beautiful things that I have discovered in my travels around the world.</p></em></aside>
        <!-- </nav> -->
