<?php
/**
 * Seção Sobre (Página Inicial)
 *
 * @package Bella_VIP
 */

$title    = get_theme_mod( 'bellavip_about_title', 'Um espaço pensado para cuidar de você' );
$desc     = get_theme_mod( 'bellavip_about_description', 'No Espaço Bella VIP, cada atendimento é feito com atenção, carinho e cuidado aos detalhes. Oferecemos serviços de cabelo, Gloss Express, massagens e cuidados de beleza para mulheres que desejam se sentir bem, bonitas e confiantes.' );
$image1   = get_theme_mod( 'bellavip_about_image1', get_template_directory_uri() . '/assets/images/about-1.jpg' );
$image2   = get_theme_mod( 'bellavip_about_image2', get_template_directory_uri() . '/assets/images/about-2.jpg' );

$features = array(
	array(
		'title' => get_theme_mod( 'bellavip_about_feat1_title', 'Profissionais Especializadas' ),
		'desc'  => get_theme_mod( 'bellavip_about_feat1_desc', 'Equipe treinada para entender e realçar a sua beleza natural.' ),
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/></svg>',
	),
	array(
		'title' => get_theme_mod( 'bellavip_about_feat2_title', 'Ambiente Acolhedor' ),
		'desc'  => get_theme_mod( 'bellavip_about_feat2_desc', 'Um momento só seu. Tome um café, relaxe e esqueça a pressa do dia a dia.' ),
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coffee"><path d="M10 2v2"/><path d="M14 2v2"/><path d="M16 8a1 1 0 0 1 1 1v8a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V9a1 1 0 0 1 1-1h14a4 4 0 1 1 0 8h-1"/><path d="M6 2v2"/></svg>',
	),
	array(
		'title' => get_theme_mod( 'bellavip_about_feat3_title', 'Produtos Premium' ),
		'desc'  => get_theme_mod( 'bellavip_about_feat3_desc', 'Trabalhamos apenas com marcas renomadas para garantir a saúde dos seus fios e pele.' ),
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>',
	),
);
?>

<div class="py-20 bg-white" id="sobre">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row gap-16 items-center">
		
		<div class="w-full lg:w-1/2">
			<div class="grid grid-cols-2 gap-4">
				<?php if ( ! empty( $image1 ) ) : ?>
					<img src="<?php echo esc_url( $image1 ); ?>" alt="<?php esc_attr_e( 'Detalhe de produtos e ambiente', 'bella-vip' ); ?>" class="w-full h-64 object-cover rounded-2xl rounded-tr-[4rem]" loading="lazy" />
				<?php endif; ?>
				<?php if ( ! empty( $image2 ) ) : ?>
					<img src="<?php echo esc_url( $image2 ); ?>" alt="<?php esc_attr_e( 'Cliente relaxando', 'bella-vip' ); ?>" class="w-full h-64 object-cover rounded-2xl rounded-bl-[4rem] mt-8" loading="lazy" />
				<?php endif; ?>
			</div>
		</div>

		<div class="w-full lg:w-1/2">
			<?php if ( ! empty( $title ) ) : ?>
				<h2 class="text-3xl md:text-4xl font-serif text-bella-text mb-6"><?php echo esc_html( $title ); ?></h2>
			<?php endif; ?>

			<?php if ( ! empty( $desc ) ) : ?>
				<p class="text-lg text-bella-subtext mb-8 leading-relaxed"><?php echo wp_kses_post( $desc ); ?></p>
			<?php endif; ?>

			<div class="space-y-6">
				<?php foreach ( $features as $feat ) : ?>
					<?php if ( ! empty( $feat['title'] ) ) : ?>
						<div class="flex items-start">
							<div class="flex-shrink-0 mt-1">
								<div class="w-10 h-10 rounded-full bg-bella-nude flex items-center justify-center text-bella-terracotta">
									<?php echo $feat['icon']; ?>
								</div>
							</div>
							<div class="ml-4">
								<h3 class="text-lg font-medium text-bella-text"><?php echo esc_html( $feat['title'] ); ?></h3>
								<p class="mt-1 text-bella-subtext"><?php echo esc_html( $feat['desc'] ); ?></p>
							</div>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>

	</div>
</div>
