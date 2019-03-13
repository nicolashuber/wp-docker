<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vertex
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="footer">
		<div class="footer__info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'vertex' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'vertex' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'vertex' ), 'vertex', '<a href="http://nicolashuber.me">Nicolas Huber</a>' );
				?>
		</div><!-- footer__info -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
