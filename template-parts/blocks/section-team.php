<?php
/**
 * The template part for displaying the team section.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-parts/#blocks
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

?>

<section class="persons">
	<div class="wrapper">
		<h2 class="has-m-font-size">Team</h2>
			<h3>Who we are</h3>
		<div class="container">
			<?php get_template_part( 'template-parts/elements/query', 'person' ); ?>
		</div>
	</div>
</section>
