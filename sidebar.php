<?php
/**
 * Sidebar
 *
 * Displays a sidebar on the left
 *
 * @link http://www.joehiggins.me
 *
 * @package      travel-essence
 * @license      license.txt
 * @copyright    2019 Joe Higgins
 * @since        0.0.1
 *
 * Please do not edit this file.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
?>
<!-- WP sidebar -->
<?php if ( is_active_sidebar( 'ts_home_left' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">

	</div><!-- #primary-sidebar -->
<?php endif; ?>
<section id="caitlin-statement">
  <div id="caitlin">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Darren-Caitlin.jpg" alt="Caitlin" />
	</div>
  <div id="left-sidebar">
		<div id="statement">
		  <p>We travel the world, discovered and undiscovered, near and far…. We carry with us our interests and passions, which are ever-enhanced by global ideas and perspectives.</p>
			<p>This blog is devoted to our inspirations and discoveries from around the world, from wine and fashion to wellness and experiences, and more in between. Please read and share the essence of our travels.</p>
		</div>
		<div id="subscribe">
			<?php dynamic_sidebar( 'ts_home_left' ); ?>
		</div>
	</div>
	<!-- end left-sidebar -->
</section>
<!-- end caitlin-statement -->
<!-- end wp sidebar -->
