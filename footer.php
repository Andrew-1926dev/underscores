<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>
</div><!-- #container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
		<div class="footer-widgets">

			<?php if (is_active_sidebar('footer1')) : ?>
			<div class="footer-widget-area">
				<?php dynamic_sidebar('footer1'); ?>
			</div>
			<!--footer-widget-area-->
			<?php endif; ?>

			<?php if (is_active_sidebar('footer2')) : ?>
			<div class="footer-widget-area">
				<?php dynamic_sidebar('footer2'); ?>
			</div>
			<!--footer-widget-area-->
			<?php endif; ?>

			<?php if (is_active_sidebar('footer3')) : ?>
			<div class="footer-widget-area">
				<?php dynamic_sidebar('footer3'); ?>
			</div>
			<!--footer-widget-area-->
			<?php endif; ?>

			<?php if (is_active_sidebar('footer4')) : ?>
			<div class="footer-widget-area">
				<?php dynamic_sidebar('footer4'); ?>
			</div>
			<!--footer-widget-area-->
			<?php endif; ?>

		</div>
		<!--footer-widgets-->

		<nav class="site-nav footer-nav">

			<?php

				$args = array(
					'theme_location' => 'footer'
				);

			?>

				<?php wp_nav_menu(  $args ); ?>

		</nav>

		
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://peakdigitalagency.com', 'underscores' ) ); ?>"><?php
				printf( esc_html__( 'This theme was developed by %s', 'underscores' ), 'Peak Digital Agency' );
			?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
