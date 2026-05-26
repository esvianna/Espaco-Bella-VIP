<?php
/**
 * O template da página principal (Landing Page)
 *
 * @package Bella_VIP
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	// Carrega todas as seções dinâmicas controladas via Customizer
	get_template_part( 'template-parts/home', 'hero' );
	get_template_part( 'template-parts/home', 'services' );
	get_template_part( 'template-parts/home', 'gloss-express' );
	get_template_part( 'template-parts/home', 'about' );
	get_template_part( 'template-parts/home', 'gallery' );
	get_template_part( 'template-parts/home', 'testimonials' );
	get_template_part( 'template-parts/home', 'location' );

	// Opcional: exibe conteúdo extra inserido via editor de páginas do WP (caso exista)
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			if ( ! empty( get_the_content() ) ) {
				echo '<div class="py-12 bg-white"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">';
				the_content();
				echo '</div></div>';
			}
		}
	}
	?>

</main><!-- #main -->

<?php
get_footer();
