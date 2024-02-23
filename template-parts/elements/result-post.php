<?php
/**
 * The template part for displaying the resulting element from the post query.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-parts/#elements
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

?>
<article id="<?php echo esc_attr( get_post_type() ); ?>-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry header">
		<?php
		if ( has_post_thumbnail() ) :
			?>
				<div class="project-image-wrapper">
					<a aria-label="<?php echo esc_attr( get_the_title() ); ?>" href="<?php echo esc_url( get_permalink() ); ?>"></a>

					<img
						src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>"
						alt="<?php echo esc_attr( get_the_title() ); ?>"
						data-scroll
						data-scroll-direction="horizontal"
						data-scroll-speed="0.5"
						class="data-scroll"
					/>
				</div>
			<?php
		endif;
		?>
	</header><!-- .entry.header -->

	<div class="entry content">
		<h4 class="entry-title has-xxl-font-size"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h4>
		<?php if ( get_field( 'game' ) ) : ?>
			<span class="game"><?php echo esc_html( get_field( 'game' ) ); ?></span>
		<?php endif; ?>
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="permalink"><?php echo esc_html( __( 'explore', 'default' ) ); ?></a>
	</div><!-- .entry content -->
</article>
