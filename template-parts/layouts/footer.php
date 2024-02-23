<?php
/**
 * The template part for displaying the footer layout.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-parts/#layouts
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

?>

<div class="footer containers layouts alignwide content-wrapper">
	<div class="wrapper">
		<h2 class="has-display-1-font-size">Let's work together!</h2>
		<p class="email">
			<a href="mailto:info@lueg.media" href="_blank" class="has-display-3-font-size">info@lueg.media</a>
		</p>
		<p class="social">
			<a href="https://instagram.com/lueg.media" class="fa fa-instagram has-xl-font-size has-light-color" aria-hidden="true" tabindex="-1" target="_blank"></a>
		</p>

		<div class="notes has-m-font-size"><?php echo do_shortcode( '[copyright]' ); ?></div>
		<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
					)
				);
				?>
	</div>
</div> <!-- .footer containers layouts  -->
