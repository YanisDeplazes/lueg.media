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

<div id="<?php echo esc_attr( get_post_type() ); ?>-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry header">
		<?php
		if ( has_post_thumbnail() ) :
			?>
				<img 
				src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>"
				alt="<?php echo esc_attr( get_the_title() ); ?>"
				class="person-image"
				/>
			<?php
		endif;
		?>
	</header><!-- .entry.header -->

	<div class="entry content">
		<?php the_title( '<p class="entry-title has-xl-font-size">', '</p>' ); ?>
		<span class="social">
			<?php

			$instagram = get_field( 'instagram' );

			$twitter = get_field( 'twitter' );

			if ( $instagram ) {
				echo '<a href="' . esc_url( $instagram ) . '" class="fa fa-instagram has-xl-font-size" aria-hidden="true" tabindex="-1" target="_blank"></a>';
			}
			if ( $twitter ) {
				echo '<a href="' . esc_url( $twitter ) . '" class="fa fa-twitter has-xl-font-size" aria-hidden="true" tabindex="-1" target="_blank"></a>';
			}

			?>
		</span>

	</div><!-- .entry content -->
</div>
