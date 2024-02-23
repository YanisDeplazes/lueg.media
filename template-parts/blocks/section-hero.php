<?php
/**
 * The template part for displaying the hero section.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-parts/#blocks
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

?>

<section class="hero">
	<div class="bg" data-scroll data-scroll-speed="-3" class="data-scroll">
		<video class="videoembed" autoplay loop muted playsinline>
			<source src="/app/uploads/2024/02/Work-Hard-Dream-Big-Yanis-Deplazes.mp4" type="video/mp4">
			<!-- No <track> for captions needed as there's no audio -->
		</video>
	</div>
	<div class="wrapper" id="hero-wrapper">
		<div data-scroll data-scroll-speed="-1" class="sticky data-scroll">
			<?php get_template_part( 'template-parts/elements/logo' ); ?>
			<svg class="arrows" id="scrollToProjects">
				<path stroke-linecap="round" class="a1" d="M0 0 L20 22 L40 0"></path>
			</svg>
		</div>
	</div>
</section>
