<?php
/**
 * WP Blueprint Utility: Post Types
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/core/handlers/post-types/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the Post Type Handler in order to register Post Types.
 */
class PostTypes extends \WPBlueprint\Theme\Core\Handlers\PostType {

	/**
	 * Constructor: Registering Post Types.
	 */
	public function __construct() {
		$posttypes = array(
			// Define the Post Types here.
		);

		parent::set_posttypes( $posttypes );

	}
}
