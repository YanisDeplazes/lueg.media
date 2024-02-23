<?php
/**
 * WP Blueprint Utility: Theme Styles
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the Theme Styles Registration in order to register Theme Styles.
 */
class ThemeStyles extends \WPBlueprint\Theme\Core\Handlers\ThemeStyle {

	/**
	 * Constructor: Registering Theme Styles.
	 */
	public function __construct() {
		$colors = array(
			'light'         => array(
				'value'            => '#ececec',
				'allow_in_backend' => true,
			),
			'neutral-light' => array(
				'value'            => '#d0d0d0',
				'allow_in_backend' => true,
			),
			'neutral-dark'  => array(
				'value'            => '#535353',
				'allow_in_backend' => true,
			),
			'dark'          => array(
				'value'            => '#272727',
				'allow_in_backend' => true,
			),
			'primary'       => array(
				'value'            => '#D34136',
				'allow_in_backend' => true,
			),
		);

		$gradients = array(
			// Define the Theme Gradients here.
		);

		$font_sizes = array(
			's'         => array(
				'value'            => '12px',
				'value_mobile'     => '16px',
				'allow_in_backend' => true,
			),
			'm'         => array(
				'value'            => '16px',
				'value_mobile'     => '18px',
				'allow_in_backend' => true,
			),
			'xl'        => array(
				'value'            => '21.33px',
				'value_mobile'     => '20.25px',
				'elements'         => 'h4, h5, h6',
				'allow_in_backend' => true,
			),
			'xxl'       => array(
				'value'            => '28.43px',
				'value_mobile'     => '22.78px',
				'elements'         => 'h4, h5, h6',
				'allow_in_backend' => true,
			),
			'xxxl'      => array(
				'value'            => '37.9px',
				'value_mobile'     => '22.78px',
				'elements'         => 'h4, h5, h6',
				'allow_in_backend' => true,
			),
			'display-3' => array(
				'value'            => '50.52px',
				'value_mobile'     => '25.63px',
				'elements'         => 'h3',
				'allow_in_backend' => false,
			),
			'display-2' => array(
				'value'            => '67.34px',
				'value_mobile'     => '28.83px',
				'elements'         => 'h2',
				'allow_in_backend' => false,
			),
			'display-1' => array(
				'value'            => '89.76px',
				'value_mobile'     => '32.44px',
				'elements'         => 'h1',
				'allow_in_backend' => false,
			),

		);

		parent::set_colors( $colors );
		parent::set_font_sizes( $font_sizes );
		parent::set_gradients( $gradients );
	}
}
