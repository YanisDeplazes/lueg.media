<?php
/**
 * WP Blueprint Utility: Navigations
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/core/handlers/navigations/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the Navigation Handler in order to register Navigations.
 */
class Navigations extends \WPBlueprint\Theme\Core\Handlers\Navigation {

	/**
	 * Constructor: Registering Navigations.
	 */
	public function __construct() {
		$navigations = array(
			'primary_menu' => __( 'Primary Menu', 'wpblueprint' ),
			'footer_menu'  => __( 'Footer Menu', 'wpblueprint' ),
		);

		parent::set_navigations( $navigations );
	}
}
