<?php
/**
 * Template Name: Service
 * The template for displaying Service pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
global $post;
get_header('short'); ?>

<!-- Start zig zag -->
	<div id="zig-zag">
		<?php if(get_field('service-zigzag-1')) { ?>
		<div class="row <?php echo $post->post_name; ?>">
			<div class="content"><p><?php the_field('service-zigzag-1'); ?></p></div>
			<?php if(get_field('service-zigzag-image-1')) {?>
				<div class="image"><?php echo wp_get_attachment_image(get_field('service-zigzag-image-1'), 'full')?></div>
			<?php } ?>
		</div>
		<?php } ?>

	<?php if(get_field('service-zigzag-2')) { ?>
	<div class="row reverse <?php echo $post->post_name; ?>">
		<div class="content"><p><?php the_field('service-zigzag-2'); ?></p></div>
		<?php if(get_field('service-zigzag-image-2')) {?>
			<div class="image"><?php echo wp_get_attachment_image(get_field('service-zigzag-image-2'), 'full')?></div>
		<?php } ?>
	</div>
	<?php } ?>

	<?php if(get_field('service-zigzag-3')) { ?>
	<div class="row <?php echo $post->post_name; ?>">
		<div class="content"><p><?php the_field('service-zigzag-3'); ?></p></div>
		<?php if(get_field('service-zigzag-image-3')) {?>
			<div class="image"><?php echo wp_get_attachment_image(get_field('service-zigzag-image-3'), 'full')?></div>
		<?php } ?>
	</div>
	<?php } ?>
</div>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main service" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>



		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
