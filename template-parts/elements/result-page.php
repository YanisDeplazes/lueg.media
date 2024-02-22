<?php
/**
 * The template part for displaying the resulting element from the page query.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-parts/#elements
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

?>

<div id="<?php echo esc_attr( get_post_type() ); ?>-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php
		if ( has_post_thumbnail() ) :
			// Get Post Thumbnail.
			get_the_post_thumbnail();
		endif;
		?>
	</header><!-- .entry.header -->

	<div class="entry content">
		<?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
	</div><!-- .entry content -->

	<footer class="entry-footer default-max-width">

	</footer><!-- .entry footer -->

</div>
