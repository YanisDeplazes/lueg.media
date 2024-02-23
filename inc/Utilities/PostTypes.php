<?php
/**
 * WP Blueprint Utility: PostTypes
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the Post Types Registration in order to register Post Types.
 */
class PostTypes {

	/**
	 * Constructor: Registering Post Types.
	 */
	public function __construct() {
		\WPBlueprint\Core\Registration\PostTypes::set(
			[
				[
					'key'  => 'person',
					'args' => [
						'labels'       => [
							'name'          => __( 'People', 'default' ),
							'singular_name' => __( 'Person', 'default' ),
						],
						'public'       => true,
						'has_archive'  => false,
						'rewrite'      => [ 'slug' => 'people' ],
						'supports'     => [ 'title', 'thumbnail' ],
						'menu_icon'    => 'dashicons-admin-users',
						'show_in_rest' => false,
					],
				],
			]
		);
	}
}
