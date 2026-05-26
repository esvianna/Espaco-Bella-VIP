<?php
/**
 * Seção Localização (Página Inicial)
 *
 * @package Bella_VIP
 */

$title       = get_theme_mod( 'bellavip_location_title', 'Estamos no Campo Comprido, em Curitiba' );
$description = get_theme_mod( 'bellavip_location_description', 'Um espaço de fácil acesso, preparado com todo conforto para receber você. Agende seu horário e venha nos fazer uma visita.' );
$space_name  = get_theme_mod( 'bellavip_location_name', 'Espaço Bella VIP' );
$address     = get_theme_mod( 'bellavip_location_address', 'R. Eduardo Sprada, 0000 - Campo Comprido<br>Curitiba - PR' );
$map_html    = get_theme_mod( 'bellavip_location_map_html', '' );

$btn1_text = get_theme_mod( 'bellavip_location_btn1_text', 'Como chegar' );
$btn1_url  = get_theme_mod( 'bellavip_location_btn1_url', 'https://maps.google.com' );
$btn2_text = get_theme_mod( 'bellavip_location_btn2_text', 'Agendar pelo WhatsApp' );

$whatsapp_number = get_theme_mod( 'bellavip_whatsapp_number', '5541999999999' );
$whatsapp_url    = 'https://wa.me/' . esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp_number ) );
?>

<div class="py-20 bg-white" id="localizacao">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row gap-12 items-center">
		
		<div class="w-full lg:w-1/2">
			<?php if ( ! empty( $title ) ) : ?>
				<h2 class="text-3xl md:text-4xl font-serif text-bella-text mb-6"><?php echo esc_html( $title ); ?></h2>
			<?php endif; ?>

			<?php if ( ! empty( $description ) ) : ?>
				<p class="text-lg text-bella-subtext mb-8"><?php echo wp_kses_post( $description ); ?></p>
			<?php endif; ?>
			
			<div class="flex items-start mb-8">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin text-bella-terracotta mt-1 mr-3 flex-shrink-0"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
				<div>
					<?php if ( ! empty( $space_name ) ) : ?>
						<p class="font-medium text-bella-text text-lg"><?php echo esc_html( $space_name ); ?></p>
					<?php endif; ?>
					<?php if ( ! empty( $address ) ) : ?>
						<div class="text-bella-subtext"><?php echo wp_kses_post( $address ); ?></div>
					<?php endif; ?>
				</div>
			</div>

			<div class="flex flex-col sm:flex-row gap-4">
				<?php if ( ! empty( $btn1_text ) ) : ?>
					<a class="btn-secondary text-center" href="<?php echo esc_url( $btn1_url ); ?>" target="_blank" rel="noopener noreferrer">
						<?php echo esc_html( $btn1_text ); ?>
					</a>
				<?php endif; ?>
				
				<?php if ( ! empty( $btn2_text ) ) : ?>
					<a class="btn-primary text-center" href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer">
						<?php echo esc_html( $btn2_text ); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>

		<!-- Container do Mapa -->
		<div class="w-full lg:w-1/2 bg-bella-nude rounded-2xl overflow-hidden h-[400px] shadow-inner relative border border-bella-nude flex items-center justify-center">
			<?php if ( ! empty( $map_html ) ) : ?>
				<?php 
				// Sanitização flexível que permite iframes e estilos inline comuns do Google Maps
				echo wp_kses( $map_html, array(
					'iframe' => array(
						'src'             => true,
						'width'           => true,
						'height'          => true,
						'style'           => true,
						'allowfullscreen' => true,
						'loading'         => true,
						'referrerpolicy'  => true,
						'class'           => true,
					),
				) ); 
				?>
			<?php else : ?>
				<div class="text-center p-6 bg-white/80 backdrop-blur-sm rounded-xl m-4 border border-bella-rose/20 max-w-sm">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin mx-auto text-bella-terracotta mb-2"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
					<p class="text-bella-text font-medium mb-1"><?php esc_html_e( 'Mapa do Google', 'bellavip' ); ?></p>
					<p class="text-sm text-bella-subtext"><?php esc_html_e( 'Insira o código iframe do Google Maps em "Aparência > Personalizar > Página Inicial Bella VIP > Localização e Mapa" para ativar o mapa aqui.', 'bellavip' ); ?></p>
				</div>
			<?php endif; ?>
		</div>

	</div>
</div>
