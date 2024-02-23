<?php
/**
 * WP Blueprint Utility: Assets
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the Assets Registration in order to register Assets.
 */
class Assets {

	/**
	 * Constructor: Registering Assets.
	 */
	public function __construct() {
		\WPBlueprint\Core\Registration\Assets::set(
			[
				[
					'handle'  => 'font-awesome',
					'src'     => mix( 'global/vendors/font-awesome/css/font-awesome.min.css' ),
					'deps'    => [],
					'version' => '4.7.0',
					'media'   => 'all',
					'hook'    => 'wp_enqueue_scripts',
				],
				[
					'handle'  => 'locomotive-scroll',
					'src'     => mix( 'global/vendors/locomotive-scroll/locomotive-scroll.min.css' ),
					'deps'    => [],
					'version' => '4.1.4',
					'media'   => 'all',
					'hook'    => 'wp_enqueue_scripts',
				],
				[
					'handle'    => 'locomotive-scroll',
					'src'       => mix( 'global/vendors/locomotive-scroll/locomotive-scroll.min.js' ),
					'deps'      => [],
					'version'   => '4.1.4',
					'in_footer' => true, // For scripts only. Determines where the script is loaded.
					'hook'      => 'wp_enqueue_scripts',
				],
				[
					'handle'  => 'main-style',
					'src'     => mix( 'css/style.css' ), // Assumes `mix` is a function that resolves asset paths.
					'deps'    => [],
					'version' => '1.0.0',
					'media'   => 'all', // For stylesheets only.
					'hook'    => 'wp_enqueue_scripts',
				],
				[
					'handle'    => 'main-script',
					'src'       => mix( 'js/app.js' ),
					'deps'      => [],
					'version'   => '1.0.0',
					'in_footer' => true, // For scripts only. Determines where the script is loaded.
					'hook'      => 'wp_enqueue_scripts',
				],
			]
		);
	}
}
