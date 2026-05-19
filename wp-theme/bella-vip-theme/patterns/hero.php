<?php
/**
 * Title: Hero Section
 * Slug: bellavip/hero
 * Categories: bellavip
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"className":"relative pt-32 pb-20 overflow-hidden","layout":{"type":"default"}} -->
<div class="wp-block-group relative pt-32 pb-20 overflow-hidden">
	<!-- wp:html -->
	<div class="absolute inset-0 bg-bella-nude opacity-40 z-0"></div>
	<div class="absolute right-0 top-0 w-1/2 h-full bg-bella-rose opacity-10 rounded-l-full blur-3xl transform translate-x-1/3 -translate-y-1/4"></div>
	<!-- /wp:html -->

	<!-- wp:columns {"className":"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full","style":{"spacing":{"blockGap":{"top":"3rem","left":"3rem"}}}} -->
	<div class="wp-block-columns max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
		
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:paragraph {"className":"animate-fade-in-up inline-block py-1.5 px-4 rounded-full bg-white text-bella-terracotta text-xs tracking-wider uppercase font-bold mb-6 shadow-sm border border-bella-rose/30"} -->
			<p class="animate-fade-in-up inline-block py-1.5 px-4 rounded-full bg-white text-bella-terracotta text-xs tracking-wider uppercase font-bold mb-6 shadow-sm border border-bella-rose/30"><?php esc_html_e( 'Campo Comprido, Curitiba', 'bellavip' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"animate-fade-in-up delay-100 text-4xl md:text-5xl lg:text-6xl font-serif text-bella-text leading-tight mb-6"} -->
			<h1 class="wp-block-heading animate-fade-in-up delay-100 text-4xl md:text-5xl lg:text-6xl font-serif text-bella-text leading-tight mb-6" style="margin-bottom: 1.5rem;">Cabelo, beleza e <br><span class="text-bella-terracotta italic">bem-estar</span></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"animate-fade-in-up delay-200 text-lg md:text-xl text-bella-subtext mb-10 leading-relaxed max-w-lg font-light"} -->
			<p class="animate-fade-in-up delay-200 text-lg md:text-xl text-bella-subtext mb-10 leading-relaxed max-w-lg font-light" style="margin-bottom: 2.5rem;"><?php esc_html_e( 'Atendimento feminino e personalizado para quem deseja cuidar dos cabelos, relaxar e realçar a autoestima em um ambiente acolhedor.', 'bellavip' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"animate-fade-in-up delay-300"} -->
			<div class="wp-block-buttons animate-fade-in-up delay-300">
				<!-- wp:button {"className":"is-style-fill btn-primary"} -->
				<div class="wp-block-button is-style-fill btn-primary"><a class="wp-block-button__link wp-element-button" href="#servicos"><?php esc_html_e( 'Conhecer serviços', 'bellavip' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","className":"relative mt-12 lg:mt-0 animate-fade-in-up delay-200"} -->
		<div class="wp-block-column relative mt-12 lg:mt-0 animate-fade-in-up delay-200" style="flex-basis:50%">
			<!-- wp:html -->
			<div class="absolute inset-0 bg-bella-terracotta rounded-t-full rounded-b-3xl transform rotate-3 scale-105 opacity-10 z-0"></div>
			<!-- /wp:html -->
			
			<!-- wp:image {"sizeSlug":"large","className":"relative rounded-t-full rounded-b-3xl overflow-hidden shadow-2xl z-10 border-8 border-white transition-transform duration-700 hover:scale-[1.02]"} -->
			<figure class="wp-block-image size-large relative rounded-t-full rounded-b-3xl overflow-hidden shadow-2xl z-10 border-8 border-white transition-transform duration-700 hover:scale-[1.02]"><img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt=""/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
