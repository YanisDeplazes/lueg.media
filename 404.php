<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-files/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

get_header();
?>

<header class="entry-header">
	<h1 class="entry-title"><?php esc_html_e( 'Oops! Error 404.', 'wpblueprint' ); ?></h1>
	<img src="<?php echo esc_url( '/app/uploads/2024/02/bd3K5h3-Imgur.gif' ); ?>" alt="404" />
</header><!-- .page-header -->

<?php
get_footer();
