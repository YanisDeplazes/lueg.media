<?php
/**
 * WP Blueprint Utility: Gutenberg
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/core/handlers/gutenberg/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the Gutenberg Handler in order to register Gutenberg Items.
 */
class Gutenberg extends \WPBlueprint\Theme\Core\Handlers\Gutenberg {

	/**
	 * Constructor: Registering Gutenberg Items.
	 */
	public function __construct() {
		$blocks = array(
			// Define the Gutenberg Blocks here.
		);

		parent::set_blocks( $blocks );
	}
}
