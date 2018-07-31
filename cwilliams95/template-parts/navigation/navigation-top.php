<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'cwilliams95' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo cwilliams95_get_svg( array( 'icon' => 'bars' ) );
		echo cwilliams95_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'cwilliams95' );
		?>
	</button>

	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
		)
	);
	?>

	<?php if ( ( cwilliams95_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<!-- <a href="#content" class="menu-scroll-down"><?php echo cwilliams95_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'cwilliams95' ); ?></span></a> -->
	<?php endif; ?>
</nav><!-- #site-navigation -->
