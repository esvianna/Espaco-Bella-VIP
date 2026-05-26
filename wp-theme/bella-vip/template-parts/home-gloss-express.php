<?php
/**
 * Seção Destaque Gloss Express (Página Inicial)
 *
 * @package Bella_VIP
 */

$tagline     = get_theme_mod( 'bellavip_gloss_tagline', 'Destaque' );
$title       = get_theme_mod( 'bellavip_gloss_title', 'Gloss Express: uma alternativa leve para suavizar fios brancos' );
$description = get_theme_mod( 'bellavip_gloss_description', 'Para quem deseja suavizar os fios brancos sem partir para uma coloração pesada, o Gloss Express ajuda a renovar o visual, trazer brilho e manter um resultado mais natural e iluminado.' );
$feat1       = get_theme_mod( 'bellavip_gloss_feature1', 'Menos agressivo que tinturas convencionais' );
$feat2       = get_theme_mod( 'bellavip_gloss_feature2', 'Proporciona brilho espelhado' );
$feat3       = get_theme_mod( 'bellavip_gloss_feature3', 'Manutenção mais fácil e espaçada' );
$btn_text    = get_theme_mod( 'bellavip_gloss_btn_text', 'Quero saber se serve para meu cabelo' );
$btn_url     = get_theme_mod( 'bellavip_gloss_btn_url', '#' );
$image       = get_theme_mod( 'bellavip_gloss_image', get_template_directory_uri() . '/assets/images/gloss-default.jpg' );

// Se o link do botão for '#' redirecionar para o WhatsApp
if ( $btn_url === '#' || empty( $btn_url ) ) {
	$whatsapp_number = get_theme_mod( 'bellavip_whatsapp_number', '5541999999999' );
	$btn_url         = 'https://wa.me/' . esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp_number ) );
}
?>

<div class="py-20 bg-white" id="gloss-express">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="bg-bella-rose/10 rounded-[2.5rem] p-8 md:p-16 relative overflow-hidden border border-bella-rose/20">
			<div class="absolute top-0 right-0 w-64 h-64 bg-white rounded-full mix-blend-overlay filter blur-3xl opacity-50 transform translate-x-1/2 -translate-y-1/2"></div>

			<div class="grid lg:grid-cols-2 gap-12 items-center relative z-10">
				
				<div>
					<?php if ( ! empty( $tagline ) ) : ?>
						<span class="text-bella-terracotta font-bold tracking-wider uppercase text-sm mb-2 block"><?php echo esc_html( $tagline ); ?></span>
					<?php endif; ?>

					<?php if ( ! empty( $title ) ) : ?>
						<h2 class="text-3xl md:text-4xl font-serif text-bella-text mb-6"><?php echo esc_html( $title ); ?></h2>
					<?php endif; ?>

					<?php if ( ! empty( $description ) ) : ?>
						<p class="text-lg text-bella-subtext mb-8"><?php echo wp_kses_post( $description ); ?></p>
					<?php endif; ?>

					<ul class="space-y-4 mb-8">
						<?php if ( ! empty( $feat1 ) ) : ?>
							<li class="flex items-center text-bella-text"><span class="w-1.5 h-1.5 bg-bella-terracotta rounded-full mr-3"></span><?php echo esc_html( $feat1 ); ?></li>
						<?php endif; ?>
						<?php if ( ! empty( $feat2 ) ) : ?>
							<li class="flex items-center text-bella-text"><span class="w-1.5 h-1.5 bg-bella-terracotta rounded-full mr-3"></span><?php echo esc_html( $feat2 ); ?></li>
						<?php endif; ?>
						<?php if ( ! empty( $feat3 ) ) : ?>
							<li class="flex items-center text-bella-text"><span class="w-1.5 h-1.5 bg-bella-terracotta rounded-full mr-3"></span><?php echo esc_html( $feat3 ); ?></li>
						<?php endif; ?>
					</ul>

					<?php if ( ! empty( $btn_text ) ) : ?>
						<div>
							<a class="btn-primary w-full sm:w-auto text-center" href="<?php echo esc_url( $btn_url ); ?>" target="_blank" rel="noopener noreferrer">
								<?php echo esc_html( $btn_text ); ?>
							</a>
						</div>
					<?php endif; ?>
				</div>

				<div class="relative">
					<?php if ( ! empty( $image ) ) : ?>
						<div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-lg border-4 border-white">
							<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="w-full h-full object-cover" />
						</div>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>
</div>
