<?php
/**
 * Title: About Section
 * Slug: bellavip/about
 * Categories: bellavip
 */
?>
<!-- wp:group {"className":"py-20 bg-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group py-20 bg-white" id="sobre">
	<!-- wp:columns {"className":"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8","style":{"spacing":{"blockGap":{"top":"4rem","left":"4rem"}}}} -->
	<div class="wp-block-columns max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:html -->
			<div class="grid grid-cols-2 gap-4">
				<img src="https://images.unsplash.com/photo-1522337660859-02fbefca4702?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Detalhe de produtos e ambiente" class="w-full h-64 object-cover rounded-2xl rounded-tr-[4rem]" loading="lazy" />
				<img src="https://images.unsplash.com/photo-1600948836101-f9ffda59d250?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Cliente relaxando" class="w-full h-64 object-cover rounded-2xl rounded-bl-[4rem] mt-8" loading="lazy" />
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:heading {"level":2,"className":"text-3xl md:text-4xl font-serif text-bella-text mb-6"} -->
			<h2 class="wp-block-heading text-3xl md:text-4xl font-serif text-bella-text mb-6"><?php esc_html_e( 'Um espaço pensado para cuidar de você', 'bellavip' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"text-lg text-bella-subtext mb-8 leading-relaxed"} -->
			<p class="text-lg text-bella-subtext mb-8 leading-relaxed"><?php esc_html_e( 'No Espaço Bella VIP, cada atendimento é feito com atenção, carinho e cuidado aos detalhes. Oferecemos serviços de cabelo, Gloss Express, massagens e cuidados de beleza para mulheres que desejam se sentir bem, bonitas e confiantes.', 'bellavip' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:html -->
			<div class="space-y-6">
				<div class="flex items-start">
					<div class="flex-shrink-0 mt-1">
						<div class="w-10 h-10 rounded-full bg-bella-nude flex items-center justify-center text-bella-terracotta">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/></svg>
						</div>
					</div>
					<div class="ml-4">
						<h3 class="text-lg font-medium text-bella-text"><?php esc_html_e( 'Profissionais Especializadas', 'bellavip' ); ?></h3>
						<p class="mt-1 text-bella-subtext"><?php esc_html_e( 'Equipe treinada para entender e realçar a sua beleza natural.', 'bellavip' ); ?></p>
					</div>
				</div>
				<div class="flex items-start">
					<div class="flex-shrink-0 mt-1">
						<div class="w-10 h-10 rounded-full bg-bella-nude flex items-center justify-center text-bella-terracotta">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coffee"><path d="M10 2v2"/><path d="M14 2v2"/><path d="M16 8a1 1 0 0 1 1 1v8a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V9a1 1 0 0 1 1-1h14a4 4 0 1 1 0 8h-1"/><path d="M6 2v2"/></svg>
						</div>
					</div>
					<div class="ml-4">
						<h3 class="text-lg font-medium text-bella-text"><?php esc_html_e( 'Ambiente Acolhedor', 'bellavip' ); ?></h3>
						<p class="mt-1 text-bella-subtext"><?php esc_html_e( 'Um momento só seu. Tome um café, relaxe e esqueça a pressa do dia a dia.', 'bellavip' ); ?></p>
					</div>
				</div>
				<div class="flex items-start">
					<div class="flex-shrink-0 mt-1">
						<div class="w-10 h-10 rounded-full bg-bella-nude flex items-center justify-center text-bella-terracotta">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
						</div>
					</div>
					<div class="ml-4">
						<h3 class="text-lg font-medium text-bella-text"><?php esc_html_e( 'Produtos Premium', 'bellavip' ); ?></h3>
						<p class="mt-1 text-bella-subtext"><?php esc_html_e( 'Trabalhamos apenas com marcas renomadas para garantir a saúde dos seus fios e pele.', 'bellavip' ); ?></p>
					</div>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
