<?php
/**
 * Seção de Serviços (Página Inicial)
 *
 * @package Bella_VIP
 */

$title    = get_theme_mod( 'bellavip_services_title', 'Nossos Serviços' );
$subtitle = get_theme_mod( 'bellavip_services_subtitle', 'Soluções completas de beleza e bem-estar, com atendimento exclusivo e foco em resultados reais.' );

$services = array(
	array(
		'title' => get_theme_mod( 'bellavip_service1_title', 'Gloss Express' ),
		'desc'  => get_theme_mod( 'bellavip_service1_desc', 'Ideal para suavizar e disfarçar fios brancos, dar brilho intenso e renovar o visual sem aspect de coloração pesada.' ),
		'image' => get_theme_mod( 'bellavip_service1_image', get_template_directory_uri() . '/assets/images/service-cabelo.jpg' ),
		'link'  => '#gloss-express',
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/></svg>',
	),
	array(
		'title' => get_theme_mod( 'bellavip_service2_title', 'Cabelo' ),
		'desc'  => get_theme_mod( 'bellavip_service2_desc', 'Corte, escova, progressiva, tratamentos de hidratação profunda e finalização perfeita para o seu dia a dia.' ),
		'image' => get_theme_mod( 'bellavip_service2_image', get_template_directory_uri() . '/assets/images/service-cabelo.jpg' ),
		'link'  => '#sobre',
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scissors"><circle cx="6" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><line x1="20" x2="8.12" y1="4" y2="15.88"/><line x1="14.47" x2="20" y1="14.48" y2="20"/><line x1="8.12" x2="12" y1="8.12" y2="12"/></svg>',
	),
	array(
		'title' => get_theme_mod( 'bellavip_service3_title', 'Massagens' ),
		'desc'  => get_theme_mod( 'bellavip_service3_desc', 'Técnicas de relaxamento, bem-estar e alívio de tensões para você se desconectar e recarregar as energias.' ),
		'image' => get_theme_mod( 'bellavip_service3_image', get_template_directory_uri() . '/assets/images/service-massoterapia.jpg' ),
		'link'  => '#localizacao',
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flower-2"><path d="M12 5a3 3 0 1 1 3 3m-3-3a3 3 0 1 0-3 3m3-3v1M9 8a3 3 0 1 0 3 3M9 8h1m5-1a3 3 0 1 1-3 3m3-3h-1m-5 5a3 3 0 1 0 3 3m-3-3v-1m5 1a3 3 0 1 1-3 3m3-3v-1m-3 3v-1"/></svg>',
	),
);

$whatsapp_number = get_theme_mod( 'bellavip_whatsapp_number', '5541999999999' );
$whatsapp_url    = 'https://wa.me/' . esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp_number ) );
?>

<div class="py-24 bg-bella-nude/50" id="servicos">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<div class="text-center max-w-2xl mx-auto mb-16">
			<?php if ( ! empty( $title ) ) : ?>
				<h2 class="text-3xl md:text-4xl font-serif text-bella-text mb-4"><?php echo esc_html( $title ); ?></h2>
			<?php endif; ?>

			<?php if ( ! empty( $subtitle ) ) : ?>
				<p class="text-lg text-bella-subtext"><?php echo esc_html( $subtitle ); ?></p>
			<?php endif; ?>
		</div>

		<div class="grid md:grid-cols-3 gap-8">
			<?php foreach ( $services as $service ) : ?>
				<?php if ( ! empty( $service['title'] ) ) : ?>
					<div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-transparent hover:border-bella-rose/30">
						<?php if ( ! empty( $service['image'] ) ) : ?>
							<div class="h-48 overflow-hidden relative">
								<div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors z-10"></div>
								<img src="<?php echo esc_url( $service['image'] ); ?>" alt="<?php echo esc_attr( $service['title'] ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy" />
								<div class="absolute top-4 left-4 z-20 bg-white/90 backdrop-blur-sm p-2 rounded-full text-bella-terracotta shadow-sm">
									<?php echo $service['icon']; ?>
								</div>
							</div>
						<?php endif; ?>
						
						<div class="p-8">
							<h3 class="text-xl font-serif text-bella-text mb-3"><?php echo esc_html( $service['title'] ); ?></h3>
							<p class="text-bella-subtext mb-6 line-clamp-3"><?php echo esc_html( $service['desc'] ); ?></p>
							<a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="text-bella-terracotta font-medium flex items-center hover:text-[#c27a5d] transition-colors">
								<?php esc_html_e( 'Agendar horário', 'bella-vip' ); ?> <span class="ml-2">→</span>
							</a>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>

	</div>
</div>
