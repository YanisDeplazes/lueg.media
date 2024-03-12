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

get_template_part( 'template-parts/blocks/section', 'hero' );
get_template_part( 'template-parts/blocks/section', 'projects' );
get_template_part( 'template-parts/blocks/section', 'quote' );
get_template_part( 'template-parts/blocks/section', 'team' );
get_template_part( 'template-parts/blocks/section', 'welcome' );

get_footer();
