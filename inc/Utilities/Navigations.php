<?php
/**
 * WP Blueprint Utility: Navigations
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the Navigations Registration in order to register Navigations.
 */
class Navigations {

	/**
	 * Constructor: Registering Navigations.
	 */
	public function __construct() {
		\WPBlueprint\Core\Registration\Navigations::set(
			[
				'footer' => 'Footer Navigation',
			]
		);
	}
}
