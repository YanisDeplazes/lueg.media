<?php
/**
 * The template for displaying all single posts.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-files/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

get_header();

while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/views/content', 'page' );

endwhile;

get_footer();
