<?php
/**
 * WP Blueprint Theme Classic Extension: Favicon
 *
 * This class provides the favicon functionality by adding the favicon to the head of the website.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/inc/extensions/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Extensions;

/**
 * Class Favicon
 *
 * This class provides the favicon functionality by adding the favicon to the head of the website.
 */
class Favicon {

	/**
	 * The color for the msapplication tile.
	 *
	 * @var string
	 */
	private $msapplication_color;

	/**
	 * The color for the theme.
	 *
	 * @var string
	 */
	private $theme_color;

	/**
	 * The color for the safari pinned tab.
	 *
	 * @var string
	 */
	private $safari_color;

	/**
	 * Constructor: Sets the colors for the favicon.
	 *
	 * @param string $msapplication_color The color for the msapplication tile.
	 * @param string $theme_color         The color for the theme.
	 * @param string $safari_color        The color for the safari pinned tab.
	 */
	public function __construct( $msapplication_color = '#ffffff', $theme_color = '#ffffff', $safari_color = '#ffffff' ) {
		$this->msapplication_color = $msapplication_color;
		$this->theme_color         = $theme_color;
		$this->safari_color        = $safari_color;
	}

	/**
	 * Initializes the Favicon feature by adding the favicon to the head of the website.
	 */
	public function register() {
		add_filter( 'get_site_icon_url', '__return_false' );
		add_action( 'wp_head', array( $this, 'add_favicon' ) );
		add_action( 'admin_head', array( $this, 'add_favicon' ) );
	}

	/**
	 * Adds the favicon to the head of the website.
	 */
	public function add_favicon() {
		echo '<link rel="apple-touch-icon" sizes="180x180" href="' . esc_url( mix( 'global/favicon/apple-touch-icon.png' ) ) . '">';
		echo '<link rel="icon" type="image/png" sizes="32x32" href="' . esc_url( mix( 'global/favicon/favicon-32x32.png' ) ) . '">';
		echo '<link rel="icon" type="image/png" sizes="16x16" href="' . esc_url( mix( 'global/favicon/favicon-16x16.png' ) ) . '">';
		echo '<link rel="manifest" href="' . esc_url( mix( 'global/favicon/site.webmanifest' ) ) . '">';
		echo '<link rel="mask-icon" href="' . esc_url( mix( 'global/favicon/safari-pinned-tab.svg' ) ) . '" color="' . esc_attr( $this->safari_color ) . '">';
		echo '<meta name="msapplication-config" content="' . esc_url( mix( 'global/favicon/browserconfig.xml' ) ) . '">';
		echo '<meta name="msapplication-TileColor" content="' . esc_attr( $this->msapplication_color ) . '">';
		echo '<meta name="theme-color" content="' . esc_attr( $this->theme_color ) . '">';

	}
}
