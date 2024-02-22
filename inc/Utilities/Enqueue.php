<?php
/**
 * WP Blueprint Utility: Enqueue
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/core/handlers/enqueue/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the Enqueue Handler in order to Enqueue new Script and Styles.
 */
class Enqueue extends \WPBlueprint\Theme\Core\Handlers\Enqueue {

	/**
	 * Constructor: Registering Enqueue.
	 */
	public function __construct() {

		$styles_and_scripts = [
			[
				'handle'  => 'main-style',
				'src'     => mix( 'css/style.css' ),
				'deps'    => [],
				'version' => '1.0.0',
				'media'   => 'all',
				'hook'    => 'front',
			],
			[
				'handle'    => 'main-script',
				'src'       => mix( 'js/app.js' ),
				'deps'      => [],
				'version'   => '1.0.0',
				'in_footer' => true,
				'hook'      => 'front',
			],
		];

		parent::set_styles_and_scripts( $styles_and_scripts );
	}
}
