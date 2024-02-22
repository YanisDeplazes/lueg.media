<?php
/**
 * WP Blueprint Utility: Post Metas
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/core/handlers/post-metas/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the Post Meta Handler in order to register Post Metas.
 */
class PostMetas extends \WPBlueprint\Theme\Core\Handlers\PostMeta {

	/**
	 * Constructor: Registering Post Metas.
	 */
	public function __construct() {
		$post_meta_fields = array(
			// Define the Post Metas here.
		);

		parent::set_post_meta_fields( $post_meta_fields );
	}
}
