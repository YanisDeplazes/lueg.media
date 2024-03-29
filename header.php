<?php
/**
 * The template for displaying the header.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-files/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-scroll-container>

	<?php if ( ! is_front_page() ) : ?>
		<header class="the_header">
			<?php get_template_part( 'template-parts/layouts/header' ); ?>
		</header>
	<?php endif; ?>

	<main id="main" class="site-main" role="main">
