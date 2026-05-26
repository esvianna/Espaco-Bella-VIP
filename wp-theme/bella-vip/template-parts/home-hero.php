<?php
/**
 * Seção Hero (Página Inicial)
 *
 * @package Bella_VIP
 */

$tagline     = get_theme_mod( 'bellavip_hero_tagline', 'Campo Comprido, Curitiba' );
$title       = get_theme_mod( 'bellavip_hero_title', 'Cabelo, beleza e <br><span class="text-bella-terracotta italic">bem-estar</span>' );
$description = get_theme_mod( 'bellavip_hero_description', 'Atendimento feminino e personalizado para quem deseja cuidar dos cabelos, relaxar e realçar a autoestima em um ambiente acolhedor.' );
$btn_text    = get_theme_mod( 'bellavip_hero_btn_text', 'Conhecer serviços' );
$btn_url     = get_theme_mod( 'bellavip_hero_btn_url', '#servicos' );
$image       = get_theme_mod( 'bellavip_hero_image', get_template_directory_uri() . '/assets/images/hero-default.jpg' );
?>

<div class="relative pt-32 pb-20 overflow-hidden bg-bella-white">
	<div class="absolute inset-0 bg-bella-nude opacity-40 z-0"></div>
	<div class="absolute right-0 top-0 w-1/2 h-full bg-bella-rose opacity-10 rounded-l-full blur-3xl transform translate-x-1/3 -translate-y-1/4"></div>

	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full flex flex-col lg:flex-row items-center gap-12">
		<div class="w-full lg:w-1/2">
			<?php if ( ! empty( $tagline ) ) : ?>
				<p class="animate-fade-in-up inline-block py-1.5 px-4 rounded-full bg-white text-bella-terracotta text-xs tracking-wider uppercase font-bold mb-6 shadow-sm border border-bella-rose/30"><?php echo esc_html( $tagline ); ?></p>
			<?php endif; ?>
			
			<?php if ( ! empty( $title ) ) : ?>
				<h1 class="animate-fade-in-up delay-100 text-4xl md:text-5xl lg:text-6xl font-serif text-bella-text leading-tight mb-6"><?php echo wp_kses_post( $title ); ?></h1>
			<?php endif; ?>

			<?php if ( ! empty( $description ) ) : ?>
				<p class="animate-fade-in-up delay-200 text-lg md:text-xl text-bella-subtext mb-10 leading-relaxed max-w-lg font-light"><?php echo wp_kses_post( $description ); ?></p>
			<?php endif; ?>

			<?php if ( ! empty( $btn_text ) ) : ?>
				<div class="animate-fade-in-up delay-300">
					<a class="btn-primary" href="<?php echo esc_url( $btn_url ); ?>"><?php echo esc_html( $btn_text ); ?></a>
				</div>
			<?php endif; ?>
		</div>

		<div class="w-full lg:w-1/2 relative mt-12 lg:mt-0 animate-fade-in-up delay-200">
			<div class="absolute inset-0 bg-bella-terracotta rounded-t-full rounded-b-3xl transform rotate-3 scale-105 opacity-10 z-0"></div>
			<?php if ( ! empty( $image ) ) : ?>
				<div class="relative rounded-t-full rounded-b-3xl overflow-hidden shadow-2xl z-10 border-8 border-white transition-transform duration-700 hover:scale-[1.02] aspect-[3/4] max-w-md mx-auto">
					<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( strip_tags( $title ) ); ?>" class="w-full h-full object-cover" />
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
