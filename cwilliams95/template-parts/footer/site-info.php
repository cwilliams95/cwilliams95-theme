<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<a href="<?php echo esc_url( __( 'https://ny-ave.com/', 'cwilliams95' ) ); ?>" class="imprint">
		<?php printf( __( 'Proudly powered by %s', 'cwilliams95' ), 'New York Ave' ); ?>
	</a>
</div><!-- .site-info -->
