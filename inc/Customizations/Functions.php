<?php
/**
 * WP Blueprint Customization: Theme Functions
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Customizations;

/**
 * This class manages various theme customizations and utility functions.
 *
 * It handles functionality like modifying theme supports, managing custom image sizes,
 * updating archive titles, adjusting excerpt lengths, and adding custom mime types among other tasks.
 */
class Functions {

	private const DEVELOPMENT_URL  = 'https://wp-blueprint.dev/';
	private const DEVELOPMENT_NAME = 'WP Blueprint';

	/**
	 * Constructor method. It initializes and adds the required theme supports, image sizes, and filters.
	 *
	 * Various `add_theme_support`, `add_image_size`, and `add_filter` calls are made in this method to
	 * bootstrap the theme's features and custom functionalities.
	 */
	public function __construct() {

		// add_theme_support() calls.
		add_theme_support( 'menus' );
		add_theme_support( 'disable-custom-font-sizes' );
		add_theme_support( 'disable-custom-colors' );
		add_theme_support( 'disable-custom-gradients' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		remove_theme_support( 'core-block-patterns' );

		// add_image_size() calls.
		add_image_size( 'post-thumbnails', 750, 500, true );
		add_image_size( 'header-image', 1920, 1080 );

		// add_filter() calls.
		add_filter( 'get_the_archive_title', array( $this, 'change_archive_title' ) );
		add_filter( 'excerpt_length', array( $this, 'change_excerpt_length' ) );
		add_filter( 'excerpt_more', array( $this, 'new_excerpt_more' ) );
		add_filter( 'the_content_more_link', array( $this, 'remove_more_link_scroll' ) );
		add_filter( 'admin_footer_text', array( $this, 'custom_admin_footer_text' ) );
		add_filter( 'upload_mimes', array( $this, 'custom_mime_types' ) );

		add_editor_style( 'assets/dist/css/style.css' );
	}

	/**
	 * Change Archiv Title
	 *
	 * @param string $title The current archive title.
	 * @return string The new archive title.
	 */
	public static function change_archive_title( $title ) {
		if ( is_category() ) {
			$title = single_cat_title( '', false );
		} elseif ( is_tag() ) {
			$title = single_tag_title( '', false );
		} elseif ( is_author() ) {
			$title = get_the_author();
		} elseif ( is_tax() ) {
			/* translators: %1$s: term title */
			$title = sprintf( '%1$s', single_term_title( '', false ) );
		} elseif ( is_post_type_archive() ) {
			$title = post_type_archive_title( '', false );
		}
		return $title;
	}

	/**
	 * Change Excerpt Length
	 *
	 * @param int $length The current excerpt length.
	 * @return int The new excerpt length.
	 */
	public static function change_excerpt_length( $length ) {
		return 40;
	}

	/**
	 * New Excerpt More
	 *
	 * @param string $more The current 'read more' string.
	 * @return string The new 'read more' string.
	 */
	public static function new_excerpt_more( $more ) {
		return ' (...)';
	}

	/**
	 * Remove More Link Scroll
	 *
	 * Prevent Page Scroll when clicking the more-Link
	 *
	 * @param string $link The current 'more' link.
	 * @return string The modified 'more' link.
	 */
	public static function remove_more_link_scroll( $link ) {
		$link = preg_replace( '|#more-[0-9]+|', '', $link );
		return $link;
	}

	/**
	 * Custom Admin Footer Text
	 *
	 * @param string $default_text The current footer text.
	 * @return string The new footer text.
	 */
	public static function custom_admin_footer_text( $default_text ) {
		return '<span id="footer-thankyou">Website by <a href="' . self::DEVELOPMENT_URL . '">' . self::DEVELOPMENT_NAME . '</a><span> | Powered by <a href="https://www.wordpress.org">WordPress</a>';
	}

	/**
	 * Custom Mime Types
	 *
	 * @param array $mimes The current list of mime types.
	 * @return array The modified list of mime types.
	 */
	public static function custom_mime_types( $mimes ) {
		// Only allow if is Admin.
		if ( is_admin() ) {
			$mimes['svg']         = 'image/svg+xml';
			$mimes['svgz']        = 'image/svg+xml';
			$mimes['doc']         = 'application/msword';
			$mimes['webmanifest'] = 'application/xml';
			$mimes['xml']         = 'application/xml';
		}

		return $mimes;
	}
}
