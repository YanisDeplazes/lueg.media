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

		<div class="video">
			<iframe src="https://www.youtube.com/embed/30DAaaM8DJo?si=HAIOyzdHwnqi6Zvh&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			<p class="more has-xl-font-size"><a href="https://youtu.be/7dz7k5XzPHE?si=6QmAYAn1KQhtJDM7" target="_blank">watch swiss-german version</a></p>
		</div>

		<div class="container">
			<?php get_template_part( 'template-parts/elements/query', 'person' ); ?>
		</div>
	</div>
</section>
