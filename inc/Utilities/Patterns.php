<?php
/**
 * WP Blueprint Utility: Patterns
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/core/handlers/patterns/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the Pattern in order to register Patterns and Pattern Categories.
 */
class Patterns extends \WPBlueprint\Theme\Core\Handlers\Pattern {

	/**
	 * Constructor: Registering Patterns and Pattern Categories.
	 */
	public function __construct() {
		$patterns = array(
			// Define the Patterns here.
		);

		$categories = array(
			// Define the Pattern Categories here.
		);

		parent::set_patterns( $patterns );
		parent::set_categories( $categories );
	}
}
