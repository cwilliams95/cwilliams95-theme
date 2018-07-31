<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('profile'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="tri-feature">
			<div class="feature-box">
				<div class="feature-content"><?php the_field('feature_1') ?></div>
			</div>
			<div class="feature-box">
				<div class="feature-content"><?php the_field('feature_2') ?></div>
			</div>
			<div class="feature-box">
				<div class="feature-content"><?php the_field('feature_3') ?></div>
			</div>
		</div>
		<?php
		// Show the selected front page content.
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif;
		?>
		<div id="alternating-section">
			<div class="alt-row">
				<div class="alt-img-wrap"><?php echo wp_get_attachment_image(get_field('alt-img-1'), 'full')?></div>
				<div class="alt-content-wrap"><?php the_field('alt-1')?></div>
			</div>
			<div class="alt-row reverse">
				<div class="alt-img-wrap"><?php echo wp_get_attachment_image(get_field('alt-img-2'), 'full')?></div>
				<div class="alt-content-wrap"><?php the_field('alt-2')?></div>
			</div>
		</div>
		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== cwilliams95_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'cwilliams95_front_page_sections', 4 );
			global $cwilliams95counter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$cwilliams95counter = $i;
				cwilliams95_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== cwilliams95_panel_count() ) ends here.

	?>
		<div id="cta">
			<div class="form-wrap"><?php the_field('cta') ?></div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
