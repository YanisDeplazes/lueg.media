<?php
/**
 * WP Blueprint Theme Classic Extension: Seo
 *
 * This class provides SEO functionalities by generating optimized meta data for pages.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/inc/extensions/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Extensions;

/**
 * Class Seo
 *
 * This class provides SEO functionalities by generating optimized meta data for pages.
 */
class Seo {

	/**
	 * Initializes the SEO features by registering the wp_head action to generate meta data.
	 */
	public function register() {
		add_action( 'wp_head', [ $this, 'generate_meta_data' ] );
	}

	/**
	 * Generates and echoes meta data for SEO optimization based on the current page context.
	 */
	public static function generate_meta_data() {
		$domain    = wp_parse_url( get_site_url(), PHP_URL_HOST );
		$url       = esc_url( get_permalink() );
		$site_name = get_bloginfo( 'name' );

		$title = is_front_page() ? get_bloginfo( 'name' ) : get_bloginfo( 'name' ) . ' - ' . get_the_title();
		$title = esc_html( $title );

		$image = '';

		if ( has_post_thumbnail() ) {
			$image = get_the_post_thumbnail_url();
			$image = esc_url( $image );
		}

		$description = '';
		$type        = 'website';
		$card        = 'summary_large_image';

		if ( is_404() ) {
			return;
		} elseif ( is_singular( 'post' ) ) {
			$type           = 'article';
			$published_time = get_the_date( 'c' );
			$modified_time  = get_the_modified_date( 'c' );

			if ( has_excerpt() ) {
				$description = wp_strip_all_tags( get_the_excerpt(), true );
			} else {
				$description = wp_strip_all_tags( get_the_content() );
				$description = substr( $description, 0, 160 );
			}
		} elseif ( is_archive() ) {
			$description = get_bloginfo( 'description' );
		} else {
			$description = get_bloginfo( 'description' );
		}

		$description = esc_html( $description );

		echo '<title>' . esc_html( $title ) . '</title>';
		echo '<meta name="description" content="' . esc_attr( $description ) . '">';

		echo '<meta property="og:url" content="' . esc_url( $url ) . '">';
		echo '<meta property="og:type" content="' . esc_attr( $type ) . '">';
		echo '<meta property="og:title" content="' . esc_attr( $title ) . '">';
		echo '<meta property="og:description" content="' . esc_attr( $description ) . '">';
		if ( ! empty( $image ) ) {
			echo '<meta property="og:image" content="' . esc_url( $image ) . '">';
		}
		echo '<meta property="og:site_name" content="' . esc_attr( $site_name ) . '">';

		echo '<meta name="twitter:card" content="' . esc_attr( $card ) . '">';
		echo '<meta property="twitter:domain" content="' . esc_attr( $domain ) . '">';
		echo '<meta property="twitter:url" content="' . esc_url( $url ) . '">';
		echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">';
		echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '">';
		if ( ! empty( $image ) ) {
			echo '<meta name="twitter:image" content="' . esc_url( $image ) . '">';
		}

	}
}
