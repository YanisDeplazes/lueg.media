<?php
/**
 * The template for displaying search results pages.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-files/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

get_header();

if ( have_posts() ) : ?>

	<header class="page-header">
		<h1 class="page-title">
			<?php
			/* translators: %s: search query. */
			printf( esc_html__( 'Search Results for: %s', 'wpblueprint' ), '<span>' . get_search_query() . '</span>' );
			?>
		</h1>
	</header><!-- .page-header -->

	<?php
	/* Start the Loop */
	while ( have_posts() ) :
		the_post();

		/**
		 * Run the loop for the search to output the results.
		 * If you want to overload this in a child theme then include a file
		 * called content-search.php and that will be used instead.
		 */
		get_template_part( 'template-parts/views/content', 'search' );

	endwhile;

	the_posts_navigation();

else :

	get_template_part( 'template-parts/views/content', 'none' );

endif;

get_footer();
