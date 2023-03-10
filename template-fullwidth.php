<?php
/**
 * Nome do Modelo: Full Width
 */
get_header(); ?>

<div class="cont">
	<div class="cntcls">
		<main class="main-cn cols-n12">
			<?php
			// Faça alguma ação antes da saída da página
			do_action('myarcadetheme_before_page');
			
			if ( have_posts() ) : 
				while ( have_posts() ) : the_post();
					if ( function_exists('is_bbpress') && is_bbpress() ) {
						get_template_part("partials/page", "content");
					} else {
						myarcadetheme_breadcrumb();
						?>
						<article><?php get_template_part("partials/page", "content"); ?></article>
						<?php
					}
				endwhile;
			
				// Execute alguma ação após a saída da página
				do_action('myarcadetheme_after_page');
			else :
			 	// Nada encontrado
				get_template_part("partial/content", "none");
			endif;
			
			myarcadetheme_comments();
			?>
		</main>
	</div>
</div>
<?php get_footer(); ?>
