<?php
/**
 * Modelo de woocommerce para exibir produtos na pagina da loja.
 *
 * Este é o modelo que exibe a pagina da loja WooCommerce.
 *
 * @package    WordPress
 * @subpackage MyArcadeTheme
 */

get_header(); ?>

<div class="cont">
	<div class="cntcls <?php echo 'sidebar_' . myarcadetheme_get_option('sidebar_position', 'right'); ?>">
		<main class="main-cn cols-n9">
			<?php woocommerce_breadcrumb(); ?>
			<?php woocommerce_content(); ?>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
