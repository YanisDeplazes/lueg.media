<?php
/**
 * The template for the primary widget area.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-files/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

if ( ! is_active_sidebar( 'primary-sidebar' ) ) {
	return;
}
?>

<aside id="primary-sidebar" class="widget-area">
	<?php dynamic_sidebar( 'primary-sidebar' ); ?>
</aside><!-- #secondary -->
