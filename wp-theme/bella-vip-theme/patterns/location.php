<?php
/**
 * Title: Location Section
 * Slug: bellavip/location
 * Categories: bellavip
 */
?>
<!-- wp:group {"className":"py-20 bg-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group py-20 bg-white" id="localizacao">
	<!-- wp:columns {"className":"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center"} -->
	<div class="wp-block-columns max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
		
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2,"className":"text-3xl md:text-4xl font-serif text-bella-text mb-6"} -->
			<h2 class="wp-block-heading text-3xl md:text-4xl font-serif text-bella-text mb-6"><?php esc_html_e( 'Estamos no Campo Comprido, em Curitiba', 'bellavip' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"text-lg text-bella-subtext mb-8"} -->
			<p class="text-lg text-bella-subtext mb-8"><?php esc_html_e( 'Um espaço de fácil acesso, preparado com todo conforto para receber você. Agende seu horário e venha nos fazer uma visita.', 'bellavip' ); ?></p>
			<!-- /wp:paragraph -->
			
			<!-- wp:html -->
			<div class="flex items-start mb-8">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin text-bella-terracotta mt-1 mr-3 flex-shrink-0"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
				<div>
					<p class="font-medium text-bella-text text-lg"><?php esc_html_e( 'Espaço Bella VIP', 'bellavip' ); ?></p>
					<div class="text-bella-subtext"><?php esc_html_e( 'R. Eduardo Sprada, 0000 - Campo Comprido<br>Curitiba - PR', 'bellavip' ); ?></div>
				</div>
			</div>
			<!-- /wp:html -->

			<!-- wp:buttons {"className":"flex flex-col sm:flex-row gap-4"} -->
			<div class="wp-block-buttons flex flex-col sm:flex-row gap-4">
				<!-- wp:button {"className":"btn-secondary"} -->
				<div class="wp-block-button btn-secondary"><a class="wp-block-button__link wp-element-button" href="https://maps.google.com" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Como chegar', 'bellavip' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-fill btn-primary group"} -->
				<div class="wp-block-button is-style-fill btn-primary group"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Agendar pelo WhatsApp', 'bellavip' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"bg-bella-nude rounded-2xl overflow-hidden h-[400px] shadow-inner relative border border-bella-nude flex items-center justify-center"} -->
		<div class="wp-block-column bg-bella-nude rounded-2xl overflow-hidden h-[400px] shadow-inner relative border border-bella-nude flex items-center justify-center">
			<!-- wp:html -->
			<div class="text-center p-6 bg-white/80 backdrop-blur-sm rounded-xl m-4 border border-bella-rose/20">
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin mx-auto text-bella-terracotta mb-2"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
				<p class="text-bella-text font-medium mb-1"><?php esc_html_e( 'Mapa do Google', 'bellavip' ); ?></p>
				<p class="text-sm text-bella-subtext"><?php esc_html_e( 'Substitua este bloco por um bloco "HTML Personalizado" com o iframe do Google Maps.', 'bellavip' ); ?></p>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
