<?php
/**
 * The template part for displaying the logo.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-parts/#elements
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

?>

<?php if ( is_front_page() ) : ?>
<div class="logo">
	<h1 data-scroll data-scroll-speed="1.2" class="text has-display-1-font-size">We are <span class="has-primary-color"><?php echo bloginfo( 'title' ); ?></span></h1>
	<p data-scroll data-scroll-speed="1.2">A Collective Dedicated to Capturing the Spirit of Esports in Switzerland and Beyond.</p>
</div>
<?php endif; ?>

<?php if ( ! is_front_page() ) : ?>
<div class="logo">
	<a href="<?php echo esc_url( get_home_url() ); ?>" aria-label="<?php echo esc_attr( bloginfo( 'title' ) ); ?>" class="text has-display-xl-font-size has-primary-color"><img class="image" src="<?php echo esc_url( mix( 'global/logo-large.svg' ) ); ?>" alt="<?php echo esc_url( get_home_url() ); ?> - Logo"></a>
</div>
<?php endif; ?>
