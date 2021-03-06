<!DOCTYPE html>
<html>
  <head>
    <meta>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- description -->
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <?php wp_head();?>
  </head>
  <body>
    <div class="full-page-wrap">
   	   <div class="grid-wrap">
        <header id="caitlins-blog-header"> <!--  background image in style.css -->
          <a href="<?php echo get_bloginfo( 'wpurl' );?>">
            <!-- banner image links back to blog home -->
            <div id="site-branding">
              <?php responsive_mobile_header_one(); ?>
            </div>
            <div id="secondary-header">
    					<?php responsive_mobile_header_two(); ?>
    				</div>
          </a>
        </header>
        <!-- <nav id="nav"> -->
          <a id="ts-logo" href="http://www.travelsommelier.com" target="_blank"></a>
          <aside id="quote"><em><p>Sharing inspiration acquired from travels around the globe.</p></em></aside>
