<?php
/**
 * Seção Depoimentos (Página Inicial)
 *
 * @package Bella_VIP
 */

$title = get_theme_mod( 'bellavip_testimonials_title', 'Clientes que já viveram essa experiência' );

$testimonials = array(
	array(
		'text'   => get_theme_mod( 'bellavip_test1_text', '"O Gloss Express salvou meu cabelo! Escondeu meus brancos sem precisar de tinta pesada. O ambiente é maravilhoso, super relaxante."' ),
		'author' => get_theme_mod( 'bellavip_test1_author', 'Ana C.' ),
		'info'   => get_theme_mod( 'bellavip_test1_info', 'Cliente desde 2023' ),
		'avatar' => get_theme_mod( 'bellavip_test1_avatar', get_template_directory_uri() . '/assets/images/avatar-placeholder.svg' ),
	),
	array(
		'text'   => get_theme_mod( 'bellavip_test2_text', '"Sempre faço meu corte e hidratação aqui. As meninas são super atenciosas e o resultado é sempre impecável. Recomendo muito!"' ),
		'author' => get_theme_mod( 'bellavip_test2_author', 'Juliana T.' ),
		'info'   => get_theme_mod( 'bellavip_test2_info', 'Cliente' ),
		'avatar' => get_theme_mod( 'bellavip_test2_avatar', get_template_directory_uri() . '/assets/images/avatar-placeholder.svg' ),
	),
	array(
		'text'   => get_theme_mod( 'bellavip_test3_text', '"A massagem relaxante é o meu momento favorito do mês. É um espaço realmente acolhedor, você se sente em casa."' ),
		'author' => get_theme_mod( 'bellavip_test3_author', 'Mariana S.' ),
		'info'   => get_theme_mod( 'bellavip_test3_info', 'Cliente desde 2024' ),
		'avatar' => get_theme_mod( 'bellavip_test3_avatar', get_template_directory_uri() . '/assets/images/avatar-placeholder.svg' ),
	),
);
?>

<div class="py-24 bg-bella-nude/30 border-y border-bella-nude relative overflow-hidden">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
		
		<div class="text-center max-w-2xl mx-auto mb-16">
			<?php if ( ! empty( $title ) ) : ?>
				<h2 class="text-3xl md:text-4xl font-serif text-bella-text mb-4"><?php echo esc_html( $title ); ?></h2>
			<?php endif; ?>
		</div>

		<div class="grid md:grid-cols-3 gap-8">
			<?php foreach ( $testimonials as $item ) : ?>
				<?php if ( ! empty( $item['author'] ) ) : ?>
					<div class="bg-white p-8 rounded-2xl shadow-sm relative flex flex-col h-full hover:shadow-md transition-shadow">
						<div class="flex text-bella-terracotta mb-4">
							<?php for ( $i = 0; $i < 5; $i++ ) : ?>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
							<?php endfor; ?>
						</div>
						
						<p class="text-bella-subtext italic mb-6 flex-grow leading-relaxed"><?php echo esc_html( $item['text'] ); ?></p>
						
						<div class="flex items-center mt-auto border-t border-bella-nude pt-4">
							<?php if ( ! empty( $item['avatar'] ) ) : ?>
								<img src="<?php echo esc_url( $item['avatar'] ); ?>" alt="<?php echo esc_attr( $item['author'] ); ?>" class="w-10 h-10 rounded-full mr-3 border border-bella-rose" loading="lazy">
							<?php endif; ?>
							<div>
								<p class="font-serif text-bella-text text-lg leading-tight"><?php echo esc_html( $item['author'] ); ?></p>
								<p class="text-xs text-bella-subtext mt-0.5"><?php echo esc_html( $item['info'] ); ?></p>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>

	</div>
</div>
