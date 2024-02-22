<?php
/**
 * Class Initializer for OOP logic
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/inc/#initializer
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic;

/**
 * This class initializes all the classes used by the theme.
 */
final class Initializer {

	/**
	 * Store all the classes inside an array
	 *
	 * @return array Full list of classes
	 */
	public static function get_services() {
		return array(
			Utilities\Enqueue::class,
			Utilities\Gutenberg::class,
			Utilities\Navigations::class,
			Utilities\ThemeStyles::class,
			Utilities\PostTypes::class,
			Utilities\Taxonomies::class,
			Utilities\WidgetAreas::class,
			Utilities\Patterns::class,
			Utilities\Shortcodes::class,
			Utilities\PostMetas::class,

			Customizations\Functions::class,
		);
	}

	/**
	 * Loop through the classes, initialize them, and call the register() method if it exists
	 *
	 * @return void
	 */
	public static function register_services() {
		foreach ( self::get_services() as $class ) {
			$service = self::instantiate( $class );
			if ( method_exists( $service, 'register' ) ) {
				$service->register();
			}
		}
	}

	/**
	 * Initialize the class
	 *
	 * @param  string $class class from the services array.
	 * @return object instance new instance of the class
	 */
	private static function instantiate( $class ) {
		return new $class();
	}
}
