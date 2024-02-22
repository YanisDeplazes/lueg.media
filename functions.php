<?php
/**
 * Contains the core functionalities and definitions for WP Blueprint. It checks for necessary files and classes, initializes core services, and integrates with any vendor dependencies.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-files/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit();

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) :
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
endif;

if ( class_exists( 'WPBlueprint\\Theme\Core\Initializer' ) ) :
	WPBlueprint\Theme\Core\Initializer::register_services();
endif;

if ( class_exists( 'WPBlueprint\\Theme\Classic\Initializer' ) ) {
	WPBlueprint\Theme\Classic\Initializer::register_services();
}

