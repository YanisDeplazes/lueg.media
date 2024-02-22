<?php
/**
 * WP Blueprint Utility: Theme Styles
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the Theme Style Handler in order to register Theme Styles.
 */
class ThemeStyles extends \WPBlueprint\Theme\Core\Handlers\ThemeStyle {

	/**
	 * Constructor: Registering Theme Styles.
	 */
	public function __construct() {
		$colors = array(
			// Define the Theme Colors here.
		);

		$gradients = array(
			// Define the Theme Gradients here.
		);

		$font_sizes = array(
			's'         => array(
				'value'            => '16px',
				'value_mobile'     => '16px',
				'allow_in_backend' => true,
			),
			'm'         => array(
				'value'            => '18px',
				'value_mobile'     => '18px',
				'allow_in_backend' => true,
			),
			'xl'        => array(
				'value'            => '25px',
				'value_mobile'     => '25px',
				'elements'         => 'h4, h5, h6',
				'allow_in_backend' => true,
			),
			'xxl'       => array(
				'value'            => '30px',
				'value_mobile'     => '25px',
				'elements'         => 'h4, h5, h6',
				'allow_in_backend' => true,
			),
			'xxxl'      => array(
				'value'            => '37px',
				'value_mobile'     => '25px',
				'elements'         => 'h4, h5, h6',
				'allow_in_backend' => true,
			),
			'display-3' => array(
				'value'            => '47px',
				'value_mobile'     => '36px',
				'elements'         => 'h3',
				'allow_in_backend' => false,
			),
			'display-2' => array(
				'value'            => '56px',
				'value_mobile'     => '48px',
				'elements'         => 'h2',
				'allow_in_backend' => false,
			),
			'display-1' => array(
				'value'            => '62px',
				'value_mobile'     => '64px',
				'elements'         => 'h1',
				'allow_in_backend' => false,
			),

		);

		parent::set_colors( $colors );
		parent::set_font_sizes( $font_sizes );
		parent::set_gradients( $gradients );
	}
}
