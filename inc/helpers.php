<?php
/**
 * Helpers methods
 * List all static functions to use globally in the theme
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/inc/#helpers
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

use Illuminate\Support\HtmlString;

if ( ! function_exists( 'dd' ) ) {

	/**
	 * Var_dump and die method
	 * Note: Should only be used in a development environment.
	 *
	 * @return void
	 */
	function dd() {
		if ( WP_DEBUG === true ) {
			echo '<pre>';
			array_map(
				function ( $x ) {
                	// phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_var_dump
					var_dump( $x );
				},
				func_get_args()
			);
			echo '</pre>';
			die();
		}
	}
}

if ( ! function_exists( 'starts_with' ) ) {

	/**
	 * Determine if a given string starts with a given substring.
	 *
	 * @param  string       $haystack           The string to search in.
	 * @param  string|array $needles            The string(s) to search for.
	 * @return bool                             Returns true if $haystack starts with $needles, false otherwise.
	 */
	function starts_with( $haystack, $needles ) {
		foreach ( (array) $needles as $needle ) {
			if ( '' !== $needle && 0 === strpos( $haystack, $needle ) ) {
				return true;
			}
		}
		return false;
	}
}

if ( ! function_exists( 'mix' ) ) {

	/**
	 * Get the path to a versioned Mix file.
	 *
	 * @param  string $path                 The path to the versioned Mix file.
	 * @param  string $manifest_directory   The directory where the manifest file can be found.
	 * @return HtmlString                   Returns a HtmlString object with the path to the versioned Mix file.
	 *
	 * @throws Exception                    Throws an Exception if the Mix manifest does not exist.
	 */
	function mix( $path, $manifest_directory = '' ) {
		if ( ! $manifest_directory ) {
			$manifest_directory = 'assets/dist/';
		}
		$manifest;

		if ( ! starts_with( $path, '/' ) ) {
			$path = "/{$path}";
		}
		if ( $manifest_directory && ! starts_with( $manifest_directory, '/' ) ) {
			$manifest_directory = "/{$manifest_directory}";
		}
		$root_dir = dirname( __FILE__, 2 );

		$manifest_path = get_active_theme_directory() . $manifest_directory . 'mix-manifest.json';

		if ( ! file_exists( $manifest_path ) ) {
			throw new Exception( 'The Mix manifest does not exist.' );
		}
	// phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
		$manifest = json_decode( file_get_contents( $manifest_path ), true );

		if ( starts_with( $manifest[ $path ], '/' ) ) {
			$manifest[ $path ] = ltrim( $manifest[ $path ], '/' );
		}

		$path = $manifest_directory . $manifest[ $path ];
		return get_active_theme_directory_uri() . $path;
	}
}

if ( ! function_exists( 'assets' ) ) {

	/**
	 * Easily point to the assets dist folder.
	 *
	 * @param  string $path The path to the asset in the dist folder.
	 */
	function assets( $path ) {
		if ( ! $path ) {
			return;
		}

		echo esc_url( get_active_theme_directory_uri() . '/assets/dist/' . $path );
	}
}

if ( ! function_exists( 'svg' ) ) {

	/**
	 * Easily point to the assets dist folder.
	 *
	 * @param  string $path The path to the SVG in the dist folder.
	 */
	function svg( $path ) {
		if ( ! $path ) {
			return;
		}

		echo esc_html( get_template_part( 'assets/dist/svg/inline', $path . '.svg' ) );
	}
}

if ( ! function_exists( 'get_active_theme_directory_uri' ) ) {

	/**
	 * Get the theme directory URI based on the context.
	 *
	 * @return string
	 */
	function get_active_theme_directory_uri() {

		if ( defined( 'IS_CHILD' ) && IS_CHILD ) {
			return get_stylesheet_directory_uri();
		}
		return get_template_directory_uri();
	}
}


if ( ! function_exists( 'get_active_theme_directory' ) ) {

	/**
	 * Get the theme directory based on the context.
	 *
	 * @return string
	 */
	function get_active_theme_directory() {

		if ( defined( 'IS_CHILD' ) && IS_CHILD ) {
			return get_stylesheet_directory();

		}
		return get_template_directory();
	}
}

if ( ! function_exists( 'wpbp_posted_on' ) ) :

	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function wpbp_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
		/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'wpblueprint' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}

endif;

if ( ! function_exists( 'wpbp_posted_by' ) ) :

	/**
	 * Prints HTML with meta information for the current author.
	 */
	function wpbp_posted_by() {
		$byline = sprintf(
		/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'wpblueprint' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}

endif;

if ( ! function_exists( 'wpbp_entry_footer' ) ) :

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function wpbp_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'wpblueprint' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'wpblueprint' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'wpblueprint' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'wpblueprint' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
					/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'wpblueprint' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					sprintf( '<span class="screen-reader-text">%s</span>', __( 'Edit %s', 'wpblueprint' ) ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}

endif;

if ( ! function_exists( 'wpbp_post_thumbnail' ) ) :

	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function wpbp_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div><!-- .post-thumbnail -->

	<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
				the_post_thumbnail(
					'post-thumbnail',
					array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
				?>
		</a>

		<?php
	endif; // End is_singular().
	}

endif;

