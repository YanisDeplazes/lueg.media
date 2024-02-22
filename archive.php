<?php
/**
 * The template for displaying archive pages.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-files/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

get_header();

if ( have_posts() ) : ?>

	<header class="page-header">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header><!-- .page-header -->

	<?php
	/* Start the Loop */
	while ( have_posts() ) :
		the_post();

		/*
		 * Include the Post-Type-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		 */
		get_template_part( 'template-parts/views/content', get_post_type() );

	endwhile;

	the_posts_navigation();

else :

	get_template_part( 'template-parts/views/content', 'none' );

endif;

get_footer();
