<?php
/**
 * The template part for displaying the post query.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-parts/#elements
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

$args = array(
	'post_type' => 'post',
);

$the_query = new WP_Query( $args );
?>

<div class="query post">
	<?php
	if ( $the_query->have_posts() ) :

		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			get_template_part( 'template-parts/elements/result', 'post' );
		endwhile;
	else :
		get_template_part( 'template-parts/elements/result', 'none' );
	endif;
	?>
</div>
