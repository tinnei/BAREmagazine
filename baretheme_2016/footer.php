<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info">

			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>

			<nav class="site-nav footer-nav">
				<?php
				
				$args = array(
					'theme_location' => 'footer'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>
			</nav>

			<p class="footer-bottom">Copyright &copy; <?php echo date('Y');?> 
			<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'aboutus' ) ) ); ?>"><?php bloginfo('name'); ?></a></p>
			
			<div class="admin-box">
				<div class="admin-login">
					<a href="<?php echo admin_url();?>">STAFF LOGIN</a>
				</div>
			</div>

		</div><!-- .site-info -->

	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
