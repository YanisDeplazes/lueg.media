<?php
/**
 * WP Blueprint Utility: Shortcodes
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/core/handlers/shortcodes/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the ShortcodeHandler in order to register Shortcodes.
 */
class Shortcodes extends \WPBlueprint\Theme\Core\Handlers\Shortcode {

	/**
	 * Constructor: Registering Shortcodes.
	 */
	public function __construct() {
		$shortcodes = array(
			array(
				'copyright',
				array( $this, 'copyright_callback' ),
			),

			// Define the Shortcodes here.

		);

		parent::set_shortcodes( $shortcodes );

	}

	/**
	 * Fetches the earliest and latest post date, and constructs a copyright string.
	 *
	 * The copyright string includes the blog name, a link to WP Blueprint, and the year range
	 * from the earliest post date to the latest post date.
	 *
	 * @global wpdb $wpdb WordPress database abstraction object.
	 * @param array  $atts Shortcode attributes.
	 * @param string $content Shortcode content.
	 * @return string The constructed copyright string.
	 */
	public function copyright_callback( $atts, $content = null ): string {
		global $wpdb;

		// Fetch earliest and latest post date.
		$post_dates = $wpdb->get_row(
			"SELECT MIN(post_date) as first, MAX(post_date) as last FROM $wpdb->posts WHERE post_status = 'publish'"
		);

		// Get years from post dates.
		$creation_year     = ! empty( $post_dates->first ) ? gmdate( 'Y', strtotime( $post_dates->first ) ) : gmdate( 'Y' );
		$last_updated_year = ! empty( $post_dates->last ) ? gmdate( 'Y', strtotime( $post_dates->last ) ) : gmdate( 'Y' );

		// Construct year string.
		$year = ( $creation_year !== $last_updated_year ) ? "$creation_year - $last_updated_year" : $creation_year;

		// Construct copyright string.
		$copyright  = '<p><span class="copyright">&copy; ' . $year . ' ' . get_bloginfo( 'name' ) . '</span> | ';
		$copyright .= '<span class="produced">' . __( 'Produced by', 'wpblueprint' ) . ' ';
		$copyright .= '<a href="https://wp-blueprint.dev" target="_blank" rel="noopener noreferrer" aria-label="' . __( 'WP Blueprint (opens in a new window)', 'wpblueprint' ) . '">';
		$copyright .= 'WP Blueprint</a></span></p>';

		return $copyright;
	}
}
