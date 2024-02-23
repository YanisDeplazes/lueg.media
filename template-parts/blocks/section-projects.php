<?php
/**
 * The template part for displaying the projects section.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-parts/#blocks
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

?>

<section class="projects" id="projects">
	<div class="wrapper">
		<h2 class="has-m-font-size">References</h2>
		<h3>What we do</h3>
		<?php get_template_part( 'template-parts/elements/query', 'post' ); ?>
		<?php
			$posts_page_id  = get_option( 'page_for_posts' );
			$posts_page_url = get_permalink( $posts_page_id );
		?>
		<p class="more has-xl-font-size"><a href="<?php echo esc_url( $posts_page_url ); ?>">View all works</a></p>
	</div>
</section>
