<?php
/**
 * The template for displaying the footer.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/classic/theme-structure/template-files/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

?>

<?php get_sidebar(); ?>

</main><!-- #main -->

<footer role="contentinfo">
	<?php get_template_part( 'template-parts/layouts/footer' ); ?>
</footer>

<?php wp_footer(); ?>

</body>

</html>
