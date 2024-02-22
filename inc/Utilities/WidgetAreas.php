<?php
/**
 * WP Blueprint Utility: Widget Areas
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/core/handlers/widget-areas/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the Widget Area Handler in order to register Widget Areas.
 */
class WidgetAreas extends \WPBlueprint\Theme\Core\Handlers\WidgetArea {

	/**
	 * Constructor: Registering Widget Areas.
	 */
	public function __construct() {
		$widget_areas = array(
			array(
				'name'          => __( 'Primary Sidebar', 'wpblueprint' ),
				'id'            => 'primary-sidebar',
				'description'   => __( 'Widgets in this area will be shown on the primary sidebar.', 'wpblueprint' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			),
		);

		parent::set_widget_areas( $widget_areas );
	}
}
