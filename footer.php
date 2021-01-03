<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Onlinery_Store
 */

?>

	<footer id="colophon" class="site-footer py-5 bg-green-100">
		<div class="site-info text-center">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'onlinery-store' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'onlinery-store' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s by %2$s.', 'onlinery-store' ), 'Onlinery Store', '<a href="https://desgrammer.com">DesGrammer</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
